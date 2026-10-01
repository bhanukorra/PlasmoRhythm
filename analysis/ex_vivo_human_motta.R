# Developed by CGNT, IIT Hyderabad
# Released under the MIT License

## =====================================================================
## GSE209877 - human host TPM (quantile-normalized) -> MetaCycle
## =====================================================================
if (!exists("zip_path")) zip_path <- "path"
zip_path <- path.expand(zip_path)
if (!file.exists(zip_path)) stop("Set zip_path to the zip file. Not found: ", zip_path)
zip_root <- file.path(dirname(normalizePath(zip_path, winslash = "/")),
                      paste0("unzipped_", tools::file_path_sans_ext(basename(zip_path))))
if (!exists("zip_unpacked") || !identical(zip_unpacked, zip_path) || !dir.exists(zip_root)) {
  if (dir.exists(zip_root)) unlink(zip_root, recursive = TRUE)
  dir.create(zip_root, showWarnings = FALSE, recursive = TRUE)
  unzip(zip_path, exdir = zip_root)
  zip_unpacked <- zip_path
}
hits <- list.files(zip_root, pattern = "^GSE209877_cleaned_sample_.*_human\\.tsv$",
                    recursive = TRUE, full.names = TRUE, ignore.case = TRUE)
if (!length(hits)) {
  inside <- list.files(zip_root, recursive = TRUE)
  inside <- inside[!grepl("(^|/)\\.|^__MACOSX/", inside)]
  stop("Expected input file was not found in ", zip_path,
       ".\nFiles in the zip:\n",
       paste(utils::head(inside, 40), collapse = "\n"), call. = FALSE)
}
path <- dirname(normalizePath(hits[[1]], winslash = "/"))
setwd(path)
library(EnsDb.Hsapiens.v86)
library(MetaCycle)

## ---- SETTINGS -------------------------------------------------------
sample_numbers <- c(2, 8, 9, 10, 11, 13, 16, 17, 18, 19)
file_pattern   <- "GSE209877_cleaned_sample_%02d_tpm_qn_human.tsv"   # check the file name
tpm_cutoff     <- 0.5      # same rule as the other RNA-seq datasets
min_frac       <- 0.7      # expressed in >= 30% of samples
step_h         <- 3        # sampling interval (h), used for rounding time points
minper         <- 21       # human circadian range
maxper         <- 27
out_folder     <- "GSE209877_human"
## ---------------------------------------------------------------------

dir.create(out_folder, showWarnings = FALSE)
summary_tab <- data.frame()

for (s in sample_numbers) {
  
  ## 1. Read -----------------------------------------------------------
  f   <- sprintf(file_pattern, s)
  tpm <- read.table(f, sep = "\t", header = TRUE, row.names = 1,
                    check.names = FALSE)
  n_start <- nrow(tpm)
  
  ## 2. Time points: round real sampling times to the nearest 3 h ----------
  tp_real <- as.numeric(colnames(tpm))
  tp      <- round(tp_real / step_h) * step_h
  max_shift <- max(abs(tp - tp_real))
  if (max_shift > 0.5)
    warning("Sample ", s, ": a time point moved by ", round(max_shift, 2),
            " h when rounding - check this sample")
  if (any(duplicated(tp)))
    stop("Sample ", s, ": two samples rounded to the same time point")
  
  ## 3. Ensembl ID -> gene name (EnsDb); unmapped keep the Ensembl ID -------
  ens <- sub("\\..*", "", rownames(tpm))
  sym <- mapIds(EnsDb.Hsapiens.v86, keys = ens, keytype = "GENEID",
                column = "GENENAME", multiVals = "first")
  no_name <- is.na(sym) | sym == ""
  sym[no_name] <- ens[no_name]
  
  ## 4. One row per gene name: keep the highest-mean Ensembl ID -----------
  ord <- order(rowMeans(tpm), decreasing = TRUE)
  tpm <- tpm[ord, ]; sym <- sym[ord]
  keep <- !duplicated(sym)
  tpm  <- tpm[keep, ]
  rownames(tpm) <- sym[keep]
  n_genes <- nrow(tpm)
  
  ## 5. Expression filter: TPM >= 0.5 -----------------------------------
  tpm <- tpm[rowMeans(tpm >= tpm_cutoff) <= min_frac, ]
  n_kept <- nrow(tpm)
  
  ## 6. Save MetaCycle input ---------------------------------------------
  out <- data.frame(Genes = rownames(tpm), tpm, check.names = FALSE)
  colnames(out)[-1] <- tp
  infile <- file.path(out_folder, sprintf("Ex_vivo_Sample%d_processed_human.csv", s))
  write.csv(out, infile, row.names = FALSE)
  
  ## 7. MetaCycle --------------------------------------------------------
  outdir <- file.path(out_folder, sprintf("Ex_vivo_Sample%d_meta2d_human", s))
  meta2d(infile = infile, filestyle = "csv", outdir = outdir,
         timepoints = tp, minper = minper, maxper = maxper,
         cycMethod = c("ARS", "JTK", "LS"), ARSdefaultPer = 24,
         outIntegration = "both")
  
  res <- read.csv(list.files(outdir, pattern = "^meta2d_", full.names = TRUE))
  n_rhythmic <- sum(res$meta2d_BH.Q < 0.05, na.rm = TRUE)
  
  ## 8. Summary ------------------------------------------------------------
  summary_tab <- rbind(summary_tab, data.frame(
    sample          = s,
    ensembl_ids     = n_start,
    unique_genes    = n_genes,
    genes_filtered  = n_kept,
    rhythmic_q0.05  = n_rhythmic,
    max_time_shift_h = round(max_shift, 2)))
  
  cat("Sample", s, ":", n_kept, "genes,", n_rhythmic, "rhythmic\n")
}

print(summary_tab)
write.csv(summary_tab, file.path(out_folder, "summary_all_samples.csv"), row.names = FALSE)

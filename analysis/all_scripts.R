# Developed by CGNT, IIT Hyderabad
# Released under the MIT License

# Set this to the zip, then run this file. It runs every script below, in order.
zip_path <- "path"



############################################################
# DS5_HB3_script.R
############################################################

####################################################
####### Dataset 5: P.falci HB3 (Bozdech2003) #######
####################################################
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
hits <- list.files(zip_root, pattern = "^HB3_FINAL_Genes_to_PF3D7_mapping\\.csv$",
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
library(limma)
library(dplyr)
library(stringr)
library(tidyr)

gpr_files <- list.files(path = "gpr_files/", pattern = "\\.gpr$", full.names = TRUE)
data <- read.maimages(gpr_files, source = "genepix")
data_bg_corrected <- backgroundCorrect(data, method = "normexp", offset = 50)
data_w    <- normalizeWithinArrays(data_bg_corrected, method = "loess")
data_norm <- normalizeBetweenArrays(data_w, method = "scale")
exprs_matrix <- data_norm$M 
keep <- rowMeans(data_norm$A < 8, na.rm = TRUE) <= 0.3
exprs_matrix <- exprs_matrix[keep, ]
probe_name   <- data$genes$Name[keep]

exprs_df <- data.frame(ID = probe_name, exprs_matrix)
colnames(exprs_df) <- gsub("pbio.0000005.sd001.", "", colnames(exprs_df))
write.csv(exprs_df, "HB3_input_new.csv", row.names = FALSE)

##map file
df<-read.csv("HB3_FINAL_Genes_to_PF3D7_mapping.csv")
exprs_df_annotated <- merge(exprs_df, df[, c("Genes", "PF3D7_locus")],
                            by.x = "ID", by.y = "Genes",
                            all.x = TRUE)

# Check results
head(exprs_df_annotated)
sum(!is.na(exprs_df_annotated$PF3D7_locus))   # matched
sum(is.na(exprs_df_annotated$PF3D7_locus))    # unmatched
exprs_df_annotated <- exprs_df_annotated[!is.na(exprs_df_annotated$PF3D7_locus), ]

tp_cols <- colnames(exprs_df_annotated)[!colnames(exprs_df_annotated) %in% c("ID", "PF3D7_locus")]

long_df <- exprs_df_annotated %>%
  pivot_longer(cols = all_of(tp_cols), names_to = "sample", values_to = "value") %>%
  mutate(base_tp = str_remove(sample, "[a-z]$"))   # strip trailing a/b/c

avg_df <- long_df %>%
  group_by(ID, PF3D7_locus, base_tp) %>%
  summarise(value = mean(value, na.rm = TRUE), .groups = "drop") %>%
  pivot_wider(names_from = base_tp, values_from = value)

tp_order_cols <- colnames(avg_df)[!colnames(avg_df) %in% c("ID", "PF3D7_locus")]
tp_order_sorted <- tp_order_cols[order(as.numeric(str_extract(tp_order_cols, "\\d+")))]

avg_df <- avg_df[, c("ID", "PF3D7_locus", tp_order_sorted)]

sum(duplicated(avg_df$PF3D7_locus))   # check how many duplicates exist

final_df <- avg_df %>%
  filter(!is.na(PF3D7_locus)) %>%     # drop unmatched rows before collapsing
  select(-ID) %>%                      # drop old ID, no longer needed once collapsed by locus
  group_by(PF3D7_locus) %>%
  summarise(across(everything(), \(x) mean(x, na.rm = TRUE)), .groups = "drop")

head(final_df)
dim(final_df)
sum(duplicated(final_df$PF3D7_locus))   # should be 0 now

colnames(final_df)<-gsub("TP_","",colnames(final_df))
final_df<-as.data.frame(final_df)
row.names(final_df)<-final_df[,1]
final_df<-final_df[,-1]
write.csv(final_df, "HB3_processed_file.csv", row.names = T)
write.csv(avg_df, "HB3_mapped_file.csv", row.names = T)
require(MetaCycle)
cyc <- meta2d(
  infile        = "HB3_processed_file.csv",
  filestyle     = "csv",
  outdir        = "HB3_meta2d_47_49_new",
  timepoints    = "Line1",
  minper        = 47,
  maxper        = 49,
  cycMethod     = c("ARS", "JTK", "LS"),
  ARSdefaultPer = 48,
  outputFile    = TRUE,
  outRawData    = TRUE
)


############################################################
# foth_Dd2_script.R
############################################################

## =====================================================================
## GSE24416 - GenePix .gpr (two-colour) -> filter -> gene level -> MetaCycle
## =====================================================================
library(limma)
library(MetaCycle)

## ---- SETTINGS (edit) ------------------------------------------------
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
hits <- list.files(zip_root, pattern = "^oligo_id\\.txt$",
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
gpr_dir    <- "gpr/"
oligo_file <- "oligo_id.txt"   
tp         <- seq(2, 48, by = 2) 
cutoff     <- 8 
out_file   <- "GSE24416_dd2_cutoff_input.csv"
out_dir    <- "GSE24416_DS9_meta2d_dd2_46_50"
## ---------------------------------------------------------------------

gpr_dir <- "gpr/"
gz <- list.files(gpr_dir, pattern = "\\.gpr\\.gz$", full.names = TRUE)
for (f in gz) if (!file.exists(sub("\\.gz$", "", f))) R.utils::gunzip(f, remove = FALSE)
gpr_files <- list.files(gpr_dir, pattern = "\\.gpr$", full.names = TRUE)
print(basename(gpr_files))
tp <- as.numeric(sub(".*_(\\d+)hpi\\.gpr$", "\\1", basename(gpr_files)))
print(tp)                                   # should be 2, 4, ..., 48
stopifnot(length(gpr_files) == 24, !is.unsorted(tp))
data <- read.maimages(gpr_files, source = "genepix")

data_bg   <- backgroundCorrect(data, method = "normexp", offset = 50)
data_w    <- normalizeWithinArrays(data_bg, method = "loess")
data_norm <- normalizeBetweenArrays(data_w, method = "scale")

hist(rowMeans(data_norm$A, na.rm = TRUE), breaks = 100)   
abline(v = cutoff, col = "red")
keep <- rowMeans(data_norm$A < 8, na.rm = TRUE) <= 0.3  # cutoff 8 based on histogram
cat("Probes kept:", sum(keep), "| removed:", sum(!keep), "\n")

exprs_df <- data.frame(ID = data$genes$ID[keep], data_norm$M[keep, ],
                       check.names = FALSE)
colnames(exprs_df)[-1] <- tp
oligo <- read.delim(oligo_file, sep = " ", stringsAsFactors = FALSE)
head(oligo)                                         # CHECK: column 1 = ID, column 2 = gene
colnames(oligo)[1:2] <- c("ID", "Gene")
merged <- merge(oligo[, c("ID", "Gene")], exprs_df, by = "ID")
merged <- merged[!is.na(merged$Gene) & merged$Gene != "", ]
cat("Probes mapped to genes:", nrow(merged), "\n")

final <- aggregate(merged[, as.character(tp)],by = list(Gene = merged$Gene), FUN = mean, na.rm = TRUE)
cat("Genes:", nrow(final), "| duplicates:", sum(duplicated(final$Gene)), "\n")
write.csv(final, out_file, row.names = FALSE)


## 7. MetaCycle (48 h cycle) -----------------------------------------------
meta2d(infile = out_file, filestyle = "csv", outdir = out_dir,
       timepoints = tp, minper = 46, maxper = 50,
       cycMethod = c("ARS", "JTK", "LS"), ARSdefaultPer = 48,
       outputFile = TRUE, outRawData = TRUE)


############################################################
# gambie_script.R
############################################################


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
hits <- list.files(zip_root, pattern = "^bODY_dd\\.csv$",
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
library(dplyr)

mapping <- read.table("GPL1321.annot", 
                      skip=28,   
                      header=TRUE,
                      sep="\t",
                      quote="",
                      comment.char="",
                      fill=TRUE,
                      stringsAsFactors=FALSE)
mapping <- mapping[, c(1,3)]
## keep only Anopheles probe sets, single-gene mappings
mapping <- mapping[grepl("^Ag\\.", mapping$ID), ]

mapping <- mapping[mapping$Gene.symbol != "" &
                     !is.na(mapping$Gene.symbol), ]
write.csv(mapping,"A.gambie_Rund_25-09-26/filtered_mapping_annotated_data.csv")

#######################
mapping<-read.csv("filtered_mapping_annotated_data.csv",row.names = 1)
probes <- read.csv("bODY_dd.csv", header=TRUE)
probes<-probes[,c(1,24:36)]
merge1 <- merge(mapping, probes, by.x = "ID", by.y = "CycID")
merge1 <- merge1[!is.na(merge1$Gene.symbol) & merge1$Gene.symbol != "", ]

merge1 <- merge1 %>%
  distinct(Gene.symbol, .keep_all = TRUE)
merge1 <- merge1[, -c(1)]
colnames(merge1)[1] <- "Genes"

write.csv(merge1, "Body_DD_Rund_mappedgenes.csv", row.names = F, quote = F)

df <- merge1
mat <- as.matrix(df[, -1]); rownames(mat) <- df$Genes
hist(rowMeans(mat, na.rm = TRUE), breaks = 100)
cutoff <- 4.5
keep <- rowMeans(mat < cutoff, na.rm = TRUE) <= 0.3
sum(!keep); round(100 * mean(!keep), 1)      # genes removed, %
filt <- df[keep, ]
nrow(filt); sum(duplicated(filt$Genes))
write.csv(filt, "Body_DD_Rund_processed.csv", row.names = FALSE)

# Total probes= 22770
# mapped genes = 10065
# processed genes = 9841

require(MetaCycle)
cyc <- meta2d(
  infile        = "Body_DD_Rund_processed.csv",
  filestyle     = "csv",
  outdir        = "Body_DD_meta2d_20_28",
  timepoints    = "Line1",
  minper        = 20,
  maxper        = 28,
  cycMethod     = c("ARS", "JTK", "LS"),
  ARSdefaultPer = 28,
  outputFile    = TRUE,
  outRawData    = TRUE
)

#####################

probes_2 <- read.csv("Body_LD.csv", header=TRUE)
probes_2<-probes_2[,c(1,24:36)]
merge2 <- merge(mapping, probes_2, by.x = "ID", by.y = "CycID")
merge2 <- merge2[!is.na(merge2$Gene.symbol) & merge2$Gene.symbol != "", ]
merge2 <- merge2 %>%distinct(Gene.symbol, .keep_all = TRUE)
merge2 <- merge2[, -c(1)]
colnames(merge2)[1] <- "Genes"

write.csv(merge2, "Body_LD_Rund_mappedgenes.csv", row.names = F, quote = F)

df<-merge2
mat <- as.matrix(df[,-1]); rownames(mat) <- df$Genes
hist(rowMeans(mat), breaks = 100)
cutoff <- 4.5
keep <- rowMeans(mat<cutoff) <= 0.3
filt <- df[keep, ]
nrow(filt)
sum(duplicated(filt$Genes))
write.csv(filt, "Body_LD_Rund_processed.csv", row.names = F, quote = F)

# Total probes= 22770
# mapped genes = 10065
# processed genes = 9887

require(MetaCycle)
cyc <- meta2d(
  infile        = "Body_LD_Rund_processed.csv",
  filestyle     = "csv",
  outdir        = "Body_LD_meta2d_20_28",
  timepoints    = "Line1",
  minper        = 20,
  maxper        = 28,
  cycMethod     = c("ARS", "JTK", "LS"),
  ARSdefaultPer = 28,
  outputFile    = TRUE,
  outRawData    = TRUE
)

#####################

probes_3 <- read.csv("hEAD_DD.csv", header=TRUE)
probes_3 <- probes_3[,c(1,24:36)]
merge3 <- merge(mapping, probes_3, by.x = "ID", by.y = "CycID")
merge3 <- merge3[!is.na(merge3$Gene.symbol) & merge3$Gene.symbol != "", ]
merge3 <- merge3 %>%distinct(Gene.symbol, .keep_all = TRUE)
merge3 <- merge3[, -c(1)]
colnames(merge3)[1] <- "Genes"

write.csv(merge3, "Head_DD_Rund_mappedgenes.csv", row.names = F, quote = F)

df<-merge3
mat <- as.matrix(df[,-1]); rownames(mat) <- df$Genes
hist(rowMeans(mat), breaks = 100)
cutoff <- 4.5
keep <- rowMeans(mat < cutoff) <= 0.3
filt <- df[keep, ]
nrow(filt)
sum(duplicated(filt$Genes))
write.csv(filt, "Head_DD_Rund_processed.csv", row.names = F, quote = F)

# Total probes= 22770
# mapped genes = 10065
# processed genes = 9833

require(MetaCycle)
cyc <- meta2d(
  infile        = "Head_DD_Rund_processed.csv",
  filestyle     = "csv",
  outdir        = "Head_DD_meta2d_20_28",
  timepoints    = "Line1",
  minper        = 20,
  maxper        = 28,
  cycMethod     = c("ARS", "JTK", "LS"),
  ARSdefaultPer = 28,
  outputFile    = TRUE,
  outRawData    = TRUE
)

#####################

probes_4 <- read.csv("hEAD-ld.csv", header=TRUE)
probes_4 <- probes_4[,c(1,24:36)]
merge4 <- merge(mapping, probes_4, by.x = "ID", by.y = "CycID")
merge4 <- merge4[!is.na(merge4$Gene.symbol) & merge4$Gene.symbol != "", ]

merge4 <- merge4 %>%
  distinct(Gene.symbol, .keep_all = TRUE)
merge4 <- merge4[, -c(1)]
colnames(merge4)[1] <- "Genes"

write.csv(merge4, "Head_LD_Rund_mappedgenes.csv", row.names = F, quote = F)

df<-merge4
mat <- as.matrix(df[,-1]); rownames(mat) <- df$Genes
hist(rowMeans(mat), breaks = 100)
cutoff <- 4.5
keep <- rowMeans(mat < cutoff) <= 0.3
filt <- df[keep, ]
nrow(filt)
sum(duplicated(filt$Genes))
write.csv(filt, "Head_LD_Rund_processed.csv", row.names = F, quote = F)

# Total probes= 22770
# mapped genes = 10065
# processed genes = 9853

require(MetaCycle)
cyc <- meta2d(
  infile        = "Head_LD_Rund_processed.csv",
  filestyle     = "csv",
  outdir        = "Head_LD_meta2d_20_28",
  timepoints    = "Line1",
  minper        = 20,
  maxper        = 28,
  cycMethod     = c("ARS", "JTK", "LS"),
  ARSdefaultPer = 28,
  outputFile    = TRUE,
  outRawData    = TRUE
)



############################################################
# ex_vivo_human_motta.R
############################################################

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


############################################################
# A.stephensie_script.R
############################################################

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
hits <- list.files(zip_root, pattern = "^GSE284425_AS_1_RPKM\\.txt$",
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

###############################################
########## A. stephensi codes #################
###############################################

AS1<-read.delim2("GSE284425_AS_1_RPKM.txt")
AS2<-read.delim2("GSE284425_AS_2_RPKM.txt")
PB_1<-read.delim2("GSE284425_PB_1_RPKM.txt")
PB_2<-read.delim2("GSE284425_PB_2_RPKM.txt")

AS1_DD<-AS1[,c(1,7:18)]
AS1_LD<-AS1[,c(1,19:30)]
colnames(AS1_DD)[2:13]<-seq(0, 44, by = 4)
colnames(AS1_LD)[2:13]<-seq(0, 44, by = 4)
AS2_DD<- AS2 %>% select(Geneid, contains("DD"))
AS2_LD <- AS2 %>% select(Geneid, contains("LD"))
colnames(AS2_DD)[2:20]<-seq(0, 72, by = 4)
colnames(AS2_LD)[2:20]<-seq(0, 72, by = 4)

# Create a new data frame with Geneid
avg_DD <- data.frame(Geneid = AS1_DD$Geneid)

# Common columns to average
common_cols <- intersect(colnames(AS1_DD)[-1], colnames(AS2_DD)[-1])
extra_cols <- setdiff(colnames(AS2_DD)[-1], common_cols)

# Average shared columns, ensuring numeric conversion
for (col in common_cols) {
  avg_DD[[col]] <- rowMeans(cbind(as.numeric(AS1_DD[[col]]), as.numeric(AS2_DD[[col]])), na.rm = TRUE)
}

# Add extra columns directly from AS2_DD, converting to numeric just in case
for (col in extra_cols) {
  avg_DD[[col]] <- as.numeric(AS2_DD[[col]])
}
###
# Create a new data frame with Geneid
avg_LD <- data.frame(Geneid = AS1_LD$Geneid)

# Find shared and extra columns
common_cols_LD <- intersect(colnames(AS1_LD)[-1], colnames(AS2_LD)[-1])
extra_cols_LD <- setdiff(colnames(AS2_LD)[-1], common_cols_LD)

# Average shared columns (0–44, for example)
for (col in common_cols_LD) {
  avg_LD[[col]] <- rowMeans(cbind(as.numeric(AS1_LD[[col]]), as.numeric(AS2_LD[[col]])), na.rm = TRUE)
}

# Add extra columns from AS2_LD (e.g., 48–72)
for (col in extra_cols_LD) {
  avg_LD[[col]] <- as.numeric(AS2_LD[[col]])
}

mean_DD <- rowMeans(avg_DD[,-1], na.rm = TRUE)
mean_LD <- rowMeans(avg_LD[,-1], na.rm = TRUE)
keep_genes <- (mean_DD >= 0.1) & (mean_LD >= 0.1)
avg_DD_filtered <- avg_DD[keep_genes, ]
avg_LD_filtered <- avg_LD[keep_genes, ]

write.csv(avg_DD_filtered,"AS_DD_filtered_mean0.01.csv",row.names = F)
write.csv(avg_LD_filtered,"AS_LD_filtered_mean0.01.csv",row.names = F)

###############################################################################3
PB1_DD<- PB_1 %>% select(Geneid, contains("DD"))
PB1_LD <- PB_1 %>% select(Geneid, contains("LD"))
colnames(PB1_DD)[2:13]<-seq(0, 44, by = 4)
colnames(PB1_LD)[2:13]<-seq(0, 44, by = 4)

PB2_DD<- PB_2 %>% select(Geneid, contains("DD"))
PB2_LD <- PB_2 %>% select(Geneid, contains("LD"))
colnames(PB2_DD)[2:20]<-seq(0, 72, by = 4)
colnames(PB2_LD)[2:20]<-seq(0, 72, by = 4)

avg_DD <- data.frame(Geneid = PB1_DD$Geneid)

# Common columns to average
common_cols <- intersect(colnames(PB1_DD)[-1], colnames(PB2_DD)[-1])
extra_cols <- setdiff(colnames(PB2_DD)[-1], common_cols)

# Average shared columns, ensuring numeric conversion
for (col in common_cols) {
  avg_DD[[col]] <- rowMeans(cbind(as.numeric(PB1_DD[[col]]), as.numeric(PB2_DD[[col]])), na.rm = TRUE)
}

# Add extra columns directly from PB2_DD, converting to numeric just in case
for (col in extra_cols) {
  avg_DD[[col]] <- as.numeric(PB2_DD[[col]])
}
###
# Create a new data frame with Geneid
avg_LD <- data.frame(Geneid = PB1_LD$Geneid)

# Find shared and extra columns
common_cols_LD <- intersect(colnames(PB1_LD)[-1], colnames(PB2_LD)[-1])
extra_cols_LD <- setdiff(colnames(PB2_LD)[-1], common_cols_LD)

# Average shared columns (0–44, for example)
for (col in common_cols_LD) {
  avg_LD[[col]] <- rowMeans(cbind(as.numeric(PB1_LD[[col]]), as.numeric(PB2_LD[[col]])), na.rm = TRUE)
}

# Add extra columns from PB2_LD (e.g., 48–72)
for (col in extra_cols_LD) {
  avg_LD[[col]] <- as.numeric(PB2_LD[[col]])
}

mean_DD <- rowMeans(avg_DD[,-1], na.rm = TRUE)
mean_LD <- rowMeans(avg_LD[,-1], na.rm = TRUE)
keep_genes <- (mean_DD >= 0.5) & (mean_LD >= 0.5)
avg_DD_filtered <- avg_DD[keep_genes, ]
avg_LD_filtered <- avg_LD[keep_genes, ]

write.csv(avg_DD_filtered,"PB_DD_filtered_mean0.05.csv",row.names = F)
write.csv(avg_LD_filtered,"PB_LD_filtered_mean0.05.csv",row.names = F)
##################################################################################

cyc <- meta2d(infile="AS_DD_filtered_mean0.01.csv",filestyle="csv", outdir="meta2d_AS_DD(20,28).csv",
              minper=20, maxper=28, timepoints="Line1",outputFile=T, ARSdefaultPer=24,
              outRawData=TRUE)
cyc1 <- meta2d(infile="AS_LD_filtered_mean0.01.csv",filestyle="csv", outdir="meta2d_AS_LD(20,28).csv",
               minper=20, maxper=28, timepoints="Line1",outputFile=T, ARSdefaultPer=24,
               outRawData=TRUE)
cyc2 <- meta2d(infile="PB_DD_filtered_mean0.05.csv",filestyle="csv", outdir="meta2d_PB_DD(20,28).csv",
               minper=20, maxper=28, timepoints="Line1",outputFile=T, ARSdefaultPer=24,
               outRawData=TRUE)
cyc3 <- meta2d(infile="PB_LD_filtered_mean0.05.csv",filestyle="csv", outdir="meta2d_PB_LD(20,28).csv",
               minper=20, maxper=28, timepoints="Line1",outputFile=T, ARSdefaultPer=24,
               outRawData=TRUE)


############################################################
# Kucharski_3D7_script.R
############################################################

#################################
###### P.falci 3D7 Kucharski ####
#################################

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
hits <- list.files(zip_root, pattern = "_fpkm\\.txt$",
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

files <- list.files(pattern = "*_fpkm.txt")
files <- sort(files)
data_list <- list()
for (file in files) {
  sample_name <- strsplit(file, "_")[[1]][2]  # Extract sample name like A3D7LC01
  df <- read.table(file, header = TRUE, sep = "\t")
  if (!"fpkm" %in% tolower(names(df))) {
    names(df) <- c("gene_id", "fpkm")
  }
  df <- df[, c("gene_id", "fpkm")]
  colnames(df)[2] <- sample_name  
  data_list[[sample_name]] <- df
}
# Merge all data frames by 'gene_id'
merged_df <- Reduce(function(x, y) merge(x, y, by = "gene_id", all = TRUE), data_list)
write.csv(merged_df, "merged_fpkm.csv", row.names = FALSE)
View(merged_df)
merged_df<-
  x<-seq(0,48, by = 2)
merged_df <- Reduce(function(x, y) merge(x, y, by = "gene_id", all = TRUE), data_list)
colnames(merged_df)[2:25]<-x
View(merged_df)
str(merged_df)
df1<-merged_df
df2<-df1
head(df2)
row.names(df1)<-df1[,c(1)]
df1<-df1[,-c(1)]
col<-as.list(colnames(df1))
for (i in col){
  print(i)
  df1[,i]<-ifelse(df1[,i] < 0.5,"low","high")
}
df1$count <- rowSums(df1 == "low")
df1$risk<-ifelse(df1$count>(ncol(df2)*30)/100,"del","no")
sort(table(df1$risk),decreasing = T)
final_data<-subset(df1,risk!="del")
gene<-row.names(final_data)
gene<-as.data.frame(gene)
head(df2)[1:5]
merge_data<-merge(gene,df2,by.x ="gene_id",by.y = "X" )
View(gene)
merge_data<-merge(gene,df2,by.x ="gene",by.y = "gene_id" )
write.csv(merge_data,file = "dataset12_3d7_rpkm_cutoff.csv")
View(merge_data)

require(MetaCycle)
cyc <- meta2d(infile="dataset12_3d7_rpkm_cutoff.csv",filestyle="csv", outdir="meta2d_3D7_D12(46,51).csv",
              minper=46, maxper=51, timepoints="Line1",outputFile=T, ARSdefaultPer=48, outRawData=TRUE)



############################################################
# metabolomics_script.R
############################################################

library("tidyverse")
library(readxl)
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
hits <- list.files(zip_root, pattern = "^Metabolomics_Datasets_Raw_input_files\\.xlsx$",
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
df<-read_excel("Metabolomics_Datasets_Raw_input_files.xlsx",sheet = 2)
df1<-df[,c(1,3:9)]
df2<-df[,c(12,14:20)]

x<-seq(0,48,by=8)
colnames(df1)[2:8]<-x
colnames(df2)[2:8]<-x

average_timepoints <- function(df) {
  time_points <- seq(0, 40, by = 8)  # 6 time points (0 to 40)
  avg_df <- data.frame(Metabolite = df[[1]])  # First column is metabolite name
  
  for (i in seq_along(time_points)) {
    start_col <- 2 + (i - 1) * 4
    end_col <- start_col + 3
    cols <- start_col:end_col
    
    avg_df[[as.character(time_points[i])]] <- rowMeans(df[, cols], na.rm = TRUE)
  }
  
  return(avg_df)
}

# Apply the averaging function
df1_avg <- average_timepoints(df1)
df2_avg <- average_timepoints(df2)

# Remove rows with any NA values
df1_avg <- df1
df2_avg <- df2
df1_avg <- na.omit(df1_avg)
df2_avg <- na.omit(df2_avg)


write.csv(df1_avg,"DS1_infected.csv",row.names = F)
write.csv(df2_avg,"DS1_uninfected.csv",row.names = F)

library(MetaCycle)
cyc <- meta2d(infile="DS1_infected.csv",filestyle="csv", outdir="DS1_infected(40,56).csv",
              minper=40, maxper=56, timepoints="Line1",outputFile=T, ARSdefaultPer=48, outRawData=TRUE)
cyc <- meta2d(infile="DS1_infected.csv",filestyle="csv", outdir="DS1_infected(16,32).csv",
              minper=16, maxper=32, timepoints="Line1",outputFile=T, ARSdefaultPer=24, outRawData=TRUE)
cyc <- meta2d(infile="DS1_uninfected.csv",filestyle="csv", outdir="DS1_uninfected(16,32).csv",
              minper=16, maxper=32, timepoints="Line1",outputFile=T, ARSdefaultPer=24, outRawData=TRUE)


############################################################
# pfalci_script_v2.R
############################################################

library(GDCRNATools)
require(MetaCycle)

# This script has GSE132643_Pchabaudi_sr10ko, GSE132643_Pchabaudi_wild_sr10, and GSE66669 painter

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
hits <- list.files(zip_root, pattern = "^GSE132643_Pchabaudi_wild_sr10ko_counts\\.csv$",
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

#########################
#####  sr10ko  ##########
#########################

sr<-read.csv("GSE132643_Pchabaudi_wild_sr10ko_counts.csv")
row.names(sr)<-sr[,1]
sr<-sr[,-1]
srwt<-sr[,c(29:56)]
sr10<-sr[,c(1:28)]
#####srwt
srwt<-as.matrix(srwt)
srwt_expr <- gdcVoomNormalization(counts=srwt, filter=FALSE)
srwt1<-as.data.frame(srwt_expr)
View(srwt1)
colnames(srwt1)
View(srwt1)
groups <- sub("_rep[0-9]+$", "", colnames(srwt1))
unique(groups)
for(g in unique(groups)) {
  cols <- grep(paste0("^", g, "_rep[0-9]+$"), colnames(srwt1))
  new_col <- g
  srwt1[[new_col]] <- rowMeans(srwt1[, cols], na.rm = TRUE)
}
View(srwt1)
View(srwt1)
input<-srwt1[,c(29:42)]
View(input)
x<-seq(5,44, by = 3)
colnames(input)<-x
write.csv(input,"srWT_voom_TMM_output_mean_input.csv")

#####################
###  sr10  ##########
#####################
sr10<-as.matrix(sr10)
sr10_expr <- gdcVoomNormalization(counts=sr10, filter=FALSE)
sr101<-as.data.frame(sr10_expr)
groups <- sub("_rep[0-9]+$", "", colnames(sr101))
unique(groups
)
for(g in unique(groups)) {
  cols <- grep(paste0("^", g, "_rep[0-9]+$"), colnames(sr101))
  new_col <- g
  sr101[[new_col]] <- rowMeans(sr101[, cols], na.rm = TRUE)
}
input<-sr101[,c(29:42)]
x<-seq(5,44, by = 3)
colnames(input)<-x
write.csv(input,"sr10_voom_TMM_output_mean_input.csv")
cyc <- meta2d(infile="sr10_voom_TMM_output_mean_input.csv",filestyle="csv",
              outdir="meta2d_sr10(21,27)NF.csv",minper=21, maxper=27,
              timepoints="Line1",outputFile=T, ARSdefaultPer=24,
              outRawData=TRUE)
cyc1 <- meta2d(infile="srWT_voom_TMM_output_mean_input.csv",filestyle="csv",
               outdir="meta2d_srWT(21,27)NF.csv",minper=21, maxper=27,
               timepoints="Line1",outputFile=T, ARSdefaultPer=24,
               outRawData=TRUE)

###########################
###### pfalci 3D7 att #####
############################

library(readxl)
df<-read_excel("GSE66669_combine.xlsx",sheet = 1)
df<-read_excel("GSE66669_combine.xlsx",sheet = 1)
View(df)
range(as.numeric(df), na.rm = TRUE)
head(df)
df<-as.data.frame(df)
head(df)[1:5]
library(limma)
df2 <- df
# Remove Gene.ID for numeric processing
expr <- df2[ , -1]
# 1) Log2 transform (add +1 to avoid log2(0))
expr.log <- log2(expr + 1)
# 2) Quantile normalization (robust default for single-channel Agilent)
expr.norm <- normalizeBetweenArrays(expr.log, method = "quantile")
# Put Gene.ID back
df_norm <- cbind(Gene.ID = df2$Gene.ID, expr.norm)
# View result
head(df_norm)
par(mfrow = c(1,2))
boxplot(expr.log, las=2, main="Before quantile")
boxplot(expr.norm, las=2, main="After quantile")
colnames(df)
range(as.numeric(df[,-1]), na.rm = TRUE)
View(df_norm)
write.csv(df_norm,"GSE66669_total_QN_input.csv")
df<-read_excel("GSE66669_combine.xlsx",sheet = 2)
df<-as.data.frame(df)
head(df)[1:5]
df2 <- df
expr <- df2[ , -1]
expr.log <- log2(expr + 1)
expr.norm <- normalizeBetweenArrays(expr.log, method = "quantile")
df_norm <- cbind(Gene.ID = df2$Gene.ID, expr.norm)
head(df_norm)
par(mfrow = c(1,2))
boxplot(expr.log, las=2, main="Before quantile")
boxplot(expr.norm, las=2, main="After quantile")
colnames(df)
range(as.numeric(df[,-1]), na.rm = TRUE)
write.csv(df_norm,"GSE66669_labeled_QN_input.csv")
df<-read_excel("GSE66669_combine.xlsx",sheet = 3)
df<-as.data.frame(df)
head(df)[1:5]
df2 <- df
expr <- df2[ , -1]
expr.log <- log2(expr + 1)
expr.norm <- normalizeBetweenArrays(expr.log, method = "quantile")
df_norm <- cbind(Gene.ID = df2$Gene.ID, expr.norm)
head(df_norm)
#par(mfrow = c(1,2))
#boxplot(expr.log, las=2, main="Before quantile")
#boxplot(expr.norm, las=2, main="After quantile")
#colnames(df)
#range(as.numeric(df[,-1]), na.rm = TRUE)
write.csv(df_norm,"GSE66669_unlabeled_QN_input.csv")
####1
cyc <- meta2d(infile="GSE66669_total_QN_input.csv",filestyle="csv",
              outdir="GSE66669_metarun/meta2d_total(47,49).csv",minper=47, maxper=49,
              timepoints="Line1",outputFile=T, ARSdefaultPer=48,
              outRawData=TRUE)
cyc1 <- meta2d(infile="GSE66669_labeled_QN_input.csv",filestyle="csv",
               outdir="GSE66669_metarun/meta2d_labeled(47,49).csv",minper=47, maxper=49,
               timepoints="Line1",outputFile=T, ARSdefaultPer=48,
               outRawData=TRUE)
cyc1 <- meta2d(infile="GSE66669_labeled_QN_input.csv",filestyle="csv",
               outdir="GSE66669_metarun/meta2d_labeled(47,49).csv",minper=47, maxper=49,
               timepoints="Line1",outputFile=T, ARSdefaultPer=48,
               outRawData=TRUE)
cyc2 <- meta2d(infile="GSE66669_unlabeled_QN_input.csv",filestyle="csv",
               outdir="GSE66669_metarun/meta2d_unlabeled(47,49).csv",minper=47, maxper=49,
               timepoints="Line1",outputFile=T, ARSdefaultPer=48,
               outRawData=TRUE)

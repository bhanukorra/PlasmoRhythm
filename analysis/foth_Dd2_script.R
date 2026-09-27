## =====================================================================
## GSE24416 - GenePix .gpr (two-colour) -> filter -> gene level -> MetaCycle
## =====================================================================
library(limma)
library(MetaCycle)

## ---- SETTINGS (edit) ------------------------------------------------
setwd("F:/plasmorhythm_R2/foth_26-09-26/") 
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

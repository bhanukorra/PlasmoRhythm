####################################################
####### Dataset 5: P.falci HB3 (Bozdech2003) #######
####################################################
setwd("F:/plasmorhythm_R2/HB3_GPR_data_21-09-26/")
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
colnames(final_df) <- gsub("gpr_files..", "", colnames(final_df))
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


setwd("F:/plasmorhythm_R2/A.gambie_Rund_25-09-26/")
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


library(GDCRNATools)
require(MetaCycle)

# This script has GSE132643_Pchabaudi_sr10ko, GSE132643_Pchabaudi_wild_sr10, and GSE66669 painter

setwd("plasmodb")

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

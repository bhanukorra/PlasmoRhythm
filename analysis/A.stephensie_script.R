# Developed by CGNT, IIT Hyderabad
# Released under the MIT License

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

#################################
###### P.falci 3D7 Kucharski ####
#################################

setwd("/home2/Kavita_workspace/collaborative_projects/Final_CircadianWork/Raw files/GSE150484_RAW/")

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


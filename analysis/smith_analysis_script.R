# Developed by CGNT, IIT Hyderabad
# Released under the MIT License

##############################################
***********   Smith et/al work      **********
##############################################

library(dplyr)
library(GDCRNATools)
library(MetaCycle)

setwd("F:/Computational_Work/MetaCycle project/")

##############################################
################## 3D7 #######################
##############################################

df<-read.csv("smith_3D7.csv")
nrow(df)
row.names(df)<-df[,1]
df<-df[,-1]

## remove genes with value < 0.5 in more than 30% of samples
keep<-rowMeans(df < 0.5) <= 0.3
table(keep)
df<-df[keep,]

x<-seq(0,60,by=3)
colnames(df)<-x
head(df)

write.csv(df,file="3d7_0.5cutoff_metainput.csv")

##############################################
################## D6 ########################
##############################################

df<-read.delim2("GSE141653_Pfalciparum_D6_FPKM.txt",row.names = 1)
View(df)
df1<-df
col<-as.list(colnames(df1))
for (i in col){
print(i)
df1[,i]<-ifelse(df1[,i] < 0.5,"low","high")
}
df1$count <- rowSums(df1 == "low")
df1$risk<-ifelse(df1$count>(ncol(df2)*30)/100,"del","no")
sort(table(df1$risk),decreasing = T)
final_data<-subset(df1,risk!="del")
df1$risk<-ifelse(df1$count>(ncol(df)*30)/100,"del","no")
sort(table(df1$risk),decreasing = T)
final_data<-subset(df1,risk!="del")
gene<-row.names(final_data)
gene<-as.data.frame(gene)
head(df1)
View(gene)
df1$ID<-row.names(df1)
merge_data<-merge(gene,df1,by.x ="gene",by.y = "ID" )
View(merge_data)
View(df1)
View(df)
df$ID<-row.names(df)
merge_data<-merge(gene,df,by.x ="gene",by.y = "ID" )
View(merge_data)
write.csv(merge_data,file = "D6_cutoff_input.csv")

##############################################
############# FVO-NIH ########################
##############################################

df<-read.delim2("GSE141653_Pfalciparum_FVO-NIH_FPKM.txt",row.names = 1)
View(df)
df1<-df
col<-as.list(colnames(df1))
for (i in col){
print(i)
df1[,i]<-ifelse(df1[,i] < 0.5,"low","high")
}
df1$count <- rowSums(df1 == "low")
df1$risk<-ifelse(df1$count>(ncol(df)*30)/100,"del","no")
sort(table(df1$risk),decreasing = T)
final_data<-subset(df1,risk!="del")
gene<-row.names(final_data)
gene<-as.data.frame(gene)
head(df1)
df$ID<-row.names(df)
merge_data<-merge(gene,df,by.x ="gene",by.y = "ID" )
View(merge_data)
write.csv(merge_data,file = "FVO_NIH_cutoff_input.csv")

############################################
############# SA250 ########################
############################################

df<-read.delim2("GSE141653_Pfalciparum_SA250_FPKM.txt",row.names = 1)
df1<-df
col<-as.list(colnames(df1))
for (i in col){
print(i)
df1[,i]<-ifelse(df1[,i] < 0.5,"low","high")
}
df1$count <- rowSums(df1 == "low")
df1$risk<-ifelse(df1$count>(ncol(df)*30)/100,"del","no")
sort(table(df1$risk),decreasing = T)
final_data<-subset(df1,risk!="del")
gene<-row.names(final_data)
gene<-as.data.frame(gene)
head(df1)
df$ID<-row.names(df)
merge_data<-merge(gene,df,by.x ="gene",by.y = "ID" )
write.csv(merge_data,file = "SA250_cutoff_input.csv")
View(gene)

###########################################################

library(MetaCycle)
cyc <- meta2d(infile="3d7_0.5cutoff_metainput.csv",filestyle="csv",
              outdir="meta2d_3D7_45_51",minper=45, maxper=51,
              timepoints="Line1",outputFile=T, ARSdefaultPer=48,
              outRawData=TRUE)
cyc <- meta2d(infile="D6_cutoff_input.csv",filestyle="csv",
	outdir="D6_meta2D(45,51)_10-11.csv",minper=45, maxper=51,
	timepoints="Line1",outputFile=T, ARSdefaultPer=48,
	outRawData=TRUE)
cyc <- meta2d(infile="FVO_NIH_cutoff_input.csv",filestyle="csv",
	outdir="FVO_NIH_meta2D(45,51)_10-11.csv",minper=45, maxper=51,
	timepoints="Line1",outputFile=T, ARSdefaultPer=48,
	outRawData=TRUE)
cyc <- meta2d(infile="SA250_cutoff_input.csv",filestyle="csv",
	outdir="SA250_meta2D(45,51)_10-11.csv",minper=45, maxper=51,
	timepoints="Line1",outputFile=T, ARSdefaultPer=48,
	outRawData=TRUE)

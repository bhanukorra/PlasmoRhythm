# Developed by CGNT, IIT Hyderabad
# Released under the MIT License

library(dplyr)
library(GDCRNATools)
library(MetaCycle)

setwd("F:/Computational_Work/MetaCycle project/voom_TMM_output/")

####II3
df<-read.csv("/Subudhi_metacycle/falciparum_countdata.csv")
row.names(df)<-df[,1]
df<-df[,-1]

df1_expr <- gdcVoomNormalization(counts=as.matrix(df), filter=FALSE)
df2<-as.data.frame(df1_expr)

x<-seq(0,48, by = 2)
input<-data.frame(row.names = row.names(df2))
for (t in x){
  input[,as.character(t)]<-(df2[,paste0("T",t,"_rep1")]+df2[,paste0("T",t,"_rep2")])/2
}
write.csv(input,"II3_voom_TMM_output_mean_input.csv")

cyc <- meta2d(infile="II3_voom_TMM_output_mean_input.csv",filestyle="csv",
              outdir="meta2d_II3_22_26_NOFILTER",minper=22, maxper=26,
              timepoints="Line1",outputFile=T, ARSdefaultPer=24,
              outRawData=TRUE)


####match
df<-read.csv("F:/Computational_Work/MetaCycle project/Raw data files/Matched with gene length.csv")
row.names(df)<-df[,1]
df<-df[,-c(1:2)]

df1_expr <- gdcVoomNormalization(counts=as.matrix(df), filter=TRUE)
write.csv(df1_expr,"match_TMM_filter_output.csv")
df<-as.data.frame(df1_expr)

input<-data.frame(row.names = row.names(df))
input$"9" <-(df$Matched_D1T0830_Rep1+df$Matched_D1T0830_Rep2)/2
input$"12"<-(df$Matched_D1T1230_Rep1+df$Matched_D1T1230_Rep2)/2
input$"15"<-(df$Matched_D1T1545_Rep1+df$Matched_D1T1545_Rep2)/2
input$"18"<-(df$Matched_D1T1850_Rep1+df$Matched_D1T1850_Rep2)/2
input$"21"<- df$Matched_D1T2150_Rep1
input$"24"<- df$Matched_D2T0055_Rep1
input$"27"<-(df$Matched_D2T0355_Rep1+df$Matched_D2T0355_Rep2)/2
input$"30"<-(df$Matched_D2T0640_Rep1+df$Matched_D2T0640_Rep2)/2
input$"33"<-(df$Matched_D2T0940_Rep1+df$Matched_D2T0940_Rep2)/2
input$"36"<-(df$Matched_D2T1230_Rep1+df$Matched_D2T1230_Rep2)/2
input$"39"<-(df$Matched_D2T1540_Rep1+df$Matched_D2T1540_Rep2)/2
write.csv(input,"match_voom_TMM_filter_output_mean_input.csv")

cyc <- meta2d(infile="match_voom_TMM_filter_output_mean_input.csv",filestyle="csv",
              outdir="meta2d_match_21_27_filter",minper=21, maxper=27,
              timepoints="Line1",outputFile=T, ARSdefaultPer=24,
              outRawData=TRUE)


####mismatch
df<-read.csv("F:/Computational_Work/MetaCycle project/Raw data files/Mismatched with gene length.csv")
row.names(df)<-df[,1]
df<-df[,-c(1:2)]

df1_expr <- gdcVoomNormalization(counts=as.matrix(df), filter=TRUE)
write.csv(df1_expr,"Mismatch_TMM_filter_output.csv")
df<-as.data.frame(df1_expr)

input<-data.frame(row.names = row.names(df))
input$"9" <-(df$Mismatched_D1T0800_Rep1+df$Mismatched_D1T0800_Rep2)/2
input$"12"<-(df$Mismatched_D1T1200_Rep1+df$Mismatched_D1T1200_Rep2)/2
input$"15"<-(df$Mismatched_D1T1520_Rep1+df$Mismatched_D1T1520_Rep2)/2
input$"18"<-(df$Mismatched_D1T1830_Rep1+df$Mismatched_D1T1830_Rep2)/2
input$"21"<-(df$Mismatched_D1T2140_Rep1+df$Mismatched_D1T2140_Rep2)/2
input$"24"<-(df$Mismatched_D2T0040_Rep1+df$Mismatched_D2T0040_Rep2)/2
input$"27"<-(df$Mismatched_D2T0340_Rep1+df$Mismatched_D2T0340_Rep2)/2
input$"30"<-(df$Mismatched_D2T0630_Rep1+df$Mismatched_D2T0630_Rep2)/2
input$"33"<-(df$Mismatched_D2T0900_Rep1+df$Mismatched_D2T0900_Rep2)/2
input$"36"<-(df$Mismatched_D2T1200_Rep1+df$Mismatched_D2T1200_Rep2)/2
input$"39"<-(df$Mismatched_D2T1505_Rep1+df$Mismatched_D2T1505_Rep2)/2
write.csv(input,"Mismatch_voom_TMM_filter_output_mean_input.csv")

cyc <- meta2d(infile="Mismatch_voom_TMM_filter_output_mean_input.csv",filestyle="csv",
              outdir="meta2d_mismatch_21_27_filter",minper=21, maxper=27,
              timepoints="Line1",outputFile=T, ARSdefaultPer=24,
              outRawData=TRUE)
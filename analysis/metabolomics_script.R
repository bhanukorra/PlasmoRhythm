# Developed by CGNT, IIT Hyderabad
# Released under the MIT License

library("tidyverse")
library(readxl)
setwd("metabolite_data/")
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
              minper=40, maxper=56, timepoints="Line1",outputFile=T, ARSdefaultPer=48, outRawData=TRUE)
cyc <- meta2d(infile="DS1_uninfected.csv",filestyle="csv", outdir="DS1_uninfected(16,32).csv",
              minper=16, maxper=32, timepoints="Line1",outputFile=T, ARSdefaultPer=24, outRawData=TRUE)





###############################################################################
# For datasets average values not required 
###############################################################################

require(MetaCycle)
read.csv("file names")
cyc <- meta2d(infile="Total.csv",filestyle="csv", outdir="meta2d_metabolomics(40,56).csv",minper=40, maxper=56, timepoints="Line1",outputFile=T, ARSdefaultPer=48, outRawData=TRUE)



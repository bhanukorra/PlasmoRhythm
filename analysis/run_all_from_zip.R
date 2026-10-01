# Developed by CGNT, IIT Hyderabad
# Released under the MIT License

# Set this to the zip that holds the input folders, then run this file.
zip_path <- "path"

if (!file.exists(zip_path)) {
  stop("Set zip_path to the zip file, then run this script again.")
}

zip_root <- file.path(dirname(normalizePath(zip_path)), "plasmorhythm_unzipped")
dir.create(zip_root, showWarnings = FALSE, recursive = TRUE)
unzip(zip_path, exdir = zip_root)

scripts <- c(
  "DS5_HB3_script.R",
  "foth_Dd2_script.R",
  "gambie_script.R",
  "ex_vivo_human_motta.R",
  "A.stephensie_script.R",
  "Kucharski_3D7_script.R",
  "metabolomics_script.R",
  "pfalci_script_v2.R"
)

this_file <- NA_character_
if (sys.nframe() >= 1 && !is.null(sys.frame(1)$ofile)) {
  this_file <- normalizePath(sys.frame(1)$ofile)
} else {
  file_arg <- grep("^--file=", commandArgs(trailingOnly = FALSE), value = TRUE)
  if (length(file_arg)) this_file <- normalizePath(sub("^--file=", "", file_arg[[1]]))
}
script_dir <- if (!is.na(this_file)) dirname(this_file) else getwd()

run_one <- function(script_file) {
  src <- file.path(script_dir, script_file)
  if (!file.exists(src)) {
    message("Missing script: ", src)
    return(invisible(FALSE))
  }
  message("Running ", script_file)
  ok <- tryCatch({
    source(src, local = FALSE)
    TRUE
  }, error = function(e) {
    message("Stopped in ", script_file, ": ", conditionMessage(e))
    FALSE
  })
  invisible(ok)
}

old_wd <- getwd()
on.exit(setwd(old_wd), add = TRUE)

for (script_file in scripts) {
  run_one(script_file)
}

message("Finished. Unzipped files are in: ", zip_root)

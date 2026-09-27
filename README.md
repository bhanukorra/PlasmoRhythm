# PlasmoRhythm

PlasmoRhythm is a database integrating rhythmic transcript, protein, and metabolite datasets from malaria-associated systems, including *Plasmodium* parasites, mosquito vectors, and host organisms. The database includes original and processed expression data, along with rhythmicity outputs computed using MetaCycle (ARSER, JTK_CYCLE, Lomb-Scargle, and Meta2D), including phase, period, amplitude, p-values, and BH-adjusted q-values for each feature. Users can browse interactive time-series visualizations with fitted curves for each rhythmicity algorithm, and download data at the dataset level.

PlasmoRhythm v1.0 is freely accessible without registration at https://project.iith.ac.in/cgntlab/PlasmoRhythm/.

This repository contains the source code for the PlasmoRhythm web application.

## Features

- Curated transcriptomics, metabolomics, and proteomics time-series datasets across *Plasmodium* parasites, mosquito vectors, and host organisms
- Rhythmicity statistics from MetaCycle (ARSER, JTK_CYCLE, Lomb-Scargle, Meta2D), including phase, period, amplitude, p-values, and BH-adjusted q-values
- Interactive Molecular Rhythmicity Viewer (MRV) with gene search, filtering, and time-series plots across datasets
- Rhythmicity of Virulence Factors (RVF) module for putative *Plasmodium* virulence genes
- Rhythmicity of Interactors of Antimalarial Drugs (RIAD) module
- Downloads available at the dataset level: original data, processed expression matrices, metadata (preprocessing and MetaCycle parameters), and MetaCycle output files

## Data sources

Datasets were compiled from the following published studies.

| Omics | Species | Datasets | Source |
|-------|---------|---------:|--------|
| Transcriptomics | *Plasmodium falciparum* | 14 | Babbitt et al., 2012; Bozdech et al., 2003; Foth et al., 2011; Kucharski et al., 2020; Painter et al., 2018; Smith et al., 2020; Subudhi et al., 2020 |
| Transcriptomics | *Plasmodium vivax* | 13 | Bozdech et al., 2008; Motta et al., 2023 |
| Transcriptomics | *Plasmodium chabaudi* | 10 | Rijo-Ferreira et al., 2020; Subudhi et al., 2020 |
| Transcriptomics | *Plasmodium berghei* | 2 | Bento et al., 2025 |
| Transcriptomics | *Anopheles gambiae* | 4 | Rund et al., 2011 |
| Transcriptomics | *Anopheles stephensi* | 2 | Bento et al., 2025 |
| Transcriptomics | *Homo sapiens* (host) | 11 | Motta et al., 2023 |
| Metabolomics | *Plasmodium falciparum* | 10 | Olszewski et al., 2009; Tewari et al., 2020; Tewari et al., 2022 |
| Proteomics | *Plasmodium falciparum* | 1 | Foth et al., 2011 |
| Proteomics | *Anopheles stephensi* | 1 | Bento et al., 2025 |
| **Total** | | **68** | |

## Analysis code

The `analysis/` folder contains the R scripts used to build the processed matrices and MetaCycle outputs. Raw expression files are not included in this repository. Each script filters or normalizes the study-specific input, then runs MetaCycle (`ARS`, `JTK`, and `LS`).

| Script | Dataset | MetaCycle period (h) |
|--------|---------|----------------------|
| `analysis/DS5_HB3_script.R` | *P. falciparum* HB3 microarray (Bozdech et al., 2003). GenePix background correction, loess and scale normalization, mapping to PF3D7 | 47–49 |
| `analysis/foth_Dd2_script.R` | *P. falciparum* Dd2 microarray, GSE24416 (Foth et al., 2011) | 46–50 |
| `analysis/Kucharski_3D7_script.R` | *P. falciparum* 3D7 RNA-seq, GSE150484 (Kucharski et al., 2020) | 46–51 |
| `analysis/pfalci_script_v2.R` | *P. chabaudi* SR10, GSE132643 (voom/TMM); *P. falciparum* 3D7, GSE66669 (Painter et al., 2018; log2 and quantile normalization) | 21–27; 47–49 |
| `analysis/gambie_script.R` | *A. gambiae* head and body, LD and DD (Rund et al., 2011). GPL1321 probe-to-gene mapping | 20–28 |
| `analysis/A.stephensie_script.R` | *A. stephensi* and *P. berghei*, GSE284425 (Bento et al., 2025) | 20–28 |
| `analysis/ex_vivo_human_motta.R` | Human host ex vivo RNA-seq, GSE209877 (Motta et al., 2023) | 21–27 |
| `analysis/metabolomics_script.R` | *P. falciparum* infected and uninfected red blood cell metabolites (Olszewski et al., 2009) | 40–56 and 16–32 |

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

**68 datasets** from published studies.

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

R scripts in `analysis/` prepare the processed matrices and MetaCycle outputs (ARSER, JTK_CYCLE, and Lomb-Scargle). Raw data files are not part of this repository.

| Script | Study | Period searched (h) |
|--------|-------|--------------------:|
| [DS5_HB3_script.R](analysis/DS5_HB3_script.R) | *P. falciparum* HB3, Bozdech et al., 2003 | 47–49 |
| [foth_Dd2_script.R](analysis/foth_Dd2_script.R) | *P. falciparum* Dd2, GSE24416, Foth et al., 2011 | 46–50 |
| [Kucharski_3D7_script.R](analysis/Kucharski_3D7_script.R) | *P. falciparum* 3D7, GSE150484, Kucharski et al., 2020 | 46–51 |
| [pfalci_script_v2.R](analysis/pfalci_script_v2.R) | *P. chabaudi* SR10, GSE132643; *P. falciparum* 3D7, GSE66669, Painter et al., 2018 | 21–27; 47–49 |
| [gambie_script.R](analysis/gambie_script.R) | *A. gambiae* head and body, LD and DD, Rund et al., 2011 | 20–28 |
| [A.stephensie_script.R](analysis/A.stephensie_script.R) | *A. stephensi* and *P. berghei*, GSE284425, Bento et al., 2025 | 20–28 |
| [ex_vivo_human_motta.R](analysis/ex_vivo_human_motta.R) | Human host, GSE209877, Motta et al., 2023 | 21–27 |
| [metabolomics_script.R](analysis/metabolomics_script.R) | *P. falciparum* metabolites, Olszewski et al., 2009 | 40–56 and 16–32 |

# PlasmoRhythm

PlasmoRhythm is a database integrating rhythmic transcript, protein, and metabolite datasets from malaria-associated systems, including *Plasmodium* parasites, mosquito vectors, and host organisms. The database includes original and processed expression data, along with rhythmicity outputs computed using MetaCycle (ARSER, JTK_CYCLE, Lomb-Scargle, and Meta2D), including phase, period, amplitude, p-values, and BH-adjusted q-values for each feature. Users can browse interactive time-series visualizations with fitted curves for each rhythmicity algorithm, and download data at the dataset level.

PlasmoRhythm v1.0 is freely accessible without registration at https://project.iith.ac.in/cgntlab/PlasmoRhythm/.

This repository contains the source code for the PlasmoRhythm web application.

## Paper

PlasmoRhythm is described in a manuscript submitted to *Bioinformatics* (BIOINF-2026-0275).

## Features

- Curated transcriptomics, metabolomics, and proteomics time-series datasets across *Plasmodium* parasites, mosquito vectors, and host organisms
- Rhythmicity statistics from MetaCycle (ARSER, JTK_CYCLE, Lomb-Scargle, Meta2D), including phase, period, amplitude, p-values, and BH-adjusted q-values
- Interactive Molecular Rhythmicity Viewer (MRV) with gene search, filtering, and time-series plots across datasets
- Rhythmicity of Virulence Factors (RVF) module for putative *Plasmodium* virulence genes
- Rhythmicity of Interactors of Antimalarial Drugs (RIAD) module
- Downloads available at the dataset level: original data, processed expression matrices, metadata (preprocessing and MetaCycle parameters), and MetaCycle output files

## Modules

| Module | What it shows |
|--------|----------------|
| Molecular Rhythmicity Viewer (MRV) | Rhythmicity across *Plasmodium* species, the mammalian host, and mosquito vectors. Search one or more genes, choose datasets and models, and set a p-value or q-value cutoff. |
| Rhythmicity of Virulence Factors (RVF) | Transcript-level oscillation of putative *Plasmodium* virulence factors across the intraerythrocytic cycle. |
| Rhythmicity of Interactors of Antimalarial Drugs (RIAD) | Rhythmicity of antimalarial-drug interactors and putative targets in *Plasmodium*. |

## What a search returns

For each gene and selected model, the result table reports:

| Column | Meaning |
|--------|---------|
| Gene ID | Identifier used in that dataset |
| Gene symbol | Gene name, when the source annotation provides one |
| Description | Product description, when the source annotation provides one |
| Amplitude | Strength of the fitted rhythm |
| p-value | Significance from the selected model |
| q-value | Benjamini–Hochberg adjusted value |
| Period (h) | Estimated cycle length |
| Phase (h) | Estimated peak time |
| Rhythmicity plot | Observed time points and the fitted curve |

Rows that do not pass the chosen cutoff are marked on the result page. Several datasets can be searched together, and the table can be downloaded as CSV.

## Data sources

**68 datasets**: 56 transcriptomics, 10 metabolomics, and 2 proteomics.

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

Organisms covered:

- Parasites: *P. falciparum*, *P. vivax*, *P. chabaudi*, *P. berghei*
- Vectors: *A. gambiae*, *A. stephensi*
- Host: *Homo sapiens*

## Rhythmicity analysis

Each processed time series was tested with MetaCycle.

| Method | Role |
|--------|------|
| ARSER | Autoregressive spectral estimation of period, phase, and amplitude |
| JTK_CYCLE | Non-parametric test of rhythmic ordering across time |
| Lomb–Scargle | Periodogram method for uneven or regularly sampled series |
| Meta2D | Integrated call across the methods above |

The period window depends on the biology of the dataset: about 48 h for the *P. falciparum* intraerythrocytic cycle, about 24 h for mosquito and host circadian series, and both a long and a short window for the metabolite series.

## Analysis code

Developed by CGNT, IIT Hyderabad.

Released under the [MIT License](LICENSE).

| Script | Study |
|--------|-------|
| [DS5_HB3_script.R](analysis/DS5_HB3_script.R) | *P. falciparum* HB3 microarray (Bozdech et al., 2003). GenePix background correction, within-array loess, between-array scale normalization, and mapping to PF3D7 |
| [foth_Dd2_script.R](analysis/foth_Dd2_script.R) | *P. falciparum* Dd2 microarray, GSE24416 (Foth et al., 2011). GenePix normalization and gene-level summary |
| [smith_analysis_script.R](analysis/smith_analysis_script.R) | *P. falciparum* 3D7, D6, FVO-NIH, and SA250 (Smith et al., 2020). Low-expression filter on FPKM |
| [voomTMM_script.R](analysis/voomTMM_script.R) | *P. falciparum* II3, LD matched, and DL mismatched (Subudhi et al., 2020). voom/TMM and replicate average |
| [Kucharski_3D7_script.R](analysis/Kucharski_3D7_script.R) | *P. falciparum* 3D7 RNA-seq, GSE150484 (Kucharski et al., 2020). Low-expression filter on FPKM |
| [pfalci_script_v2.R](analysis/pfalci_script_v2.R) | *P. chabaudi* SR10, GSE132643 (voom/TMM); *P. falciparum* 3D7, GSE66669 (Painter et al., 2018; log2 and quantile normalization) |
| [gambie_script.R](analysis/gambie_script.R) | *A. gambiae* head and body under LD and DD (Rund et al., 2011). GPL1321 probes mapped to genes; genes kept when log2 signal exceeds 4.5 in at least 30% of samples |
| [A.stephensie_script.R](analysis/A.stephensie_script.R) | *A. stephensi* and *P. berghei*, GSE284425 (Bento et al., 2025). Replicate average and expression filter |
| [ex_vivo_human_motta.R](analysis/ex_vivo_human_motta.R) | Human host ex vivo RNA-seq, GSE209877 (Motta et al., 2023). Ensembl identifiers mapped to gene names |
| [metabolomics_script.R](analysis/metabolomics_script.R) | *P. falciparum* infected and uninfected red-blood-cell metabolites (Olszewski et al., 2009) |

## Packages

The scripts do not pin package versions. The versions below are those installed with R 4.1.2 on the analysis machine. A blank version means that package is required by the script but is not installed here, so no version was recorded.

| Package | Version | Used in |
|---------|---------|---------|
| limma | 3.50.3 | `DS5_HB3_script.R`, `foth_Dd2_script.R`, `pfalci_script_v2.R` |
| dplyr | 1.1.4 | `DS5_HB3_script.R`, `gambie_script.R`, `A.stephensie_script.R`, `smith_analysis_script.R`, `voomTMM_script.R` |
| stringr | 1.5.1 | `DS5_HB3_script.R` |
| tidyr | 1.3.1 | `DS5_HB3_script.R` |
| R.utils | 2.12.3 | `foth_Dd2_script.R` (reading gzipped GenePix files) |
| AnnotationDbi | 1.56.2 | `ex_vivo_human_motta.R` (Ensembl ID to gene name) |
| MetaCycle | | All analysis scripts |
| tidyverse | | `metabolomics_script.R` |
| readxl | | `metabolomics_script.R`, `pfalci_script_v2.R` |
| GDCRNATools | | `pfalci_script_v2.R`, `smith_analysis_script.R`, `voomTMM_script.R` (voom/TMM) |
| EnsDb.Hsapiens.v86 | | `ex_vivo_human_motta.R` |

`A.stephensie_script.R` calls `dplyr` and MetaCycle functions without a `library()` line, so both still need to be loaded before that script is run.

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

| Omics | Species | Source |
|-------|---------|--------|
| Transcriptomics | *Plasmodium falciparum* | Babbitt et al., 2012; Bozdech et al., 2003; Foth et al., 2011; Kucharski et al., 2020; Painter et al., 2018; Smith et al., 2020; Subudhi et al., 2020 |
| Transcriptomics | *Plasmodium vivax* | Bozdech et al., 2008; Motta et al., 2023 |
| Transcriptomics | *Plasmodium chabaudi* | Rijo-Ferreira et al., 2020; Subudhi et al., 2020 |
| Transcriptomics | *Plasmodium berghei* | Bento et al., 2025 |
| Transcriptomics | *Anopheles gambiae* | Rund et al., 2011 |
| Transcriptomics | *Anopheles stephensi* | Bento et al., 2025 |
| Transcriptomics | *Homo sapiens* (host) | Motta et al., 2023 |
| Metabolomics | *Plasmodium falciparum* | Olszewski et al., 2009; Tewari et al., 2020; Tewari et al., 2022 |
| Proteomics | *Plasmodium falciparum* | Foth et al., 2011 |
| Proteomics | *Anopheles stephensi* | Bento et al., 2025 |

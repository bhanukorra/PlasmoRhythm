# PlasmoRhythm

**A circadian rhythmicity database for *Plasmodium*, Anopheles vectors, and human host omics**

---

## Overview

PlasmoRhythm is a web-accessible database for exploring circadian and intraerythrocytic-cycle (IDC) rhythmicity in malaria-related omics datasets.

The resource integrates **transcriptomics**, **metabolomics**, and **proteomics** time-series data with precomputed MetaCycle rhythmicity statistics (**ARS**, **JTK**, **LS**, **META2D**), interactive expression plots, gene search, virulence and drug-interaction modules, and dataset downloads.

| | |
|---|---|
| **Organisms** | *Plasmodium falciparum*, *P. vivax*, *P. chabaudi*, *P. berghei*, *Anopheles gambiae*, *A. stephensi*, *Homo sapiens* (host) |
| **Omics** | Transcriptomics · Metabolomics · Proteomics |
| **Modules** | Rhythmicity search · Gene search · Virulence · Drug interactions · Download |

---

## Availability

- **Web database:** [ADD LIVE URL]  
- **Source code:** https://github.com/bhanukorra/PlasmoRhythm  
- **Archival snapshot (DOI):** https://doi.org/10.5281/zenodo.XXXXXXX *(add after Zenodo deposit)*  

PlasmoRhythm is freely available online. Source code for this publication is deposited at GitHub, with an archival DOI provided via Zenodo.

---

## Citation

If you use PlasmoRhythm, please cite:

> [Authors]. PlasmoRhythm: … *Bioinformatics* (manuscript BIOINF-2026-0275). [DOI when available]

---

## Repository contents

| Item | Description |
|------|-------------|
| Website (`*.php`, `*.html`, `assets/`) | PlasmoRhythm web interface |
| `download_section/` | Download catalog and file-serving API |
| `database/` | MySQL database dump (when included in the release) |
| `README.md` | This file |

Large raw data files served by the live Download module are hosted with the website (or a separate data deposit) and are not required to use this code repository.

---

## Database

PlasmoRhythm is backed by a MySQL database in which each omics dataset is stored as a dedicated table containing feature identifiers, MetaCycle statistics (ARS, JTK, LS, META2D), and time-point values for plotting. Additional tables support gene search, virulence factors, and drug interactions.

| Module | Coverage |
|--------|----------|
| Transcriptomics | *P. falciparum*, *P. vivax*, *P. chabaudi*, *P. berghei*, *A. gambiae*, *A. stephensi*, host |
| Metabolomics | *P. falciparum* |
| Proteomics | *P. falciparum*, *A. stephensi* |
| Download | Original, processed, and meta2D files by species and study |

---

## Local installation (optional)

1. Install Apache, PHP, and MySQL (e.g. LAMPP/XAMPP).  
2. Import the database dump from `database/` as `Plasmo_Rhythm`.  
3. Configure database credentials locally (do not commit passwords).  
4. Place the project under the web root and open `index.html`.

---

## License

This repository is released under the [MIT License](LICENSE).

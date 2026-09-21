# PlasmoRhythm

PlasmoRhythm is a web-accessible circadian rhythmicity database for malaria research. It integrates transcriptomics, metabolomics, and proteomics time-series datasets from *Plasmodium* parasites, Anopheles vectors, and human host samples, with precomputed MetaCycle statistics (ARS, JTK, LS, META2D), interactive plots, gene search, virulence and drug modules, and dataset downloads.

## Features

- Search rhythmicity across transcriptomics, metabolomics, and proteomics datasets.
- Supports *P. falciparum*, *P. vivax*, *P. chabaudi*, *P. berghei*, *A. gambiae*, *A. stephensi*, and human host data.
- Precomputed MetaCycle results: **ARS**, **JTK**, **LS**, and **META2D**.
- Interactive time-series plots, CSV download of results, and dataset file downloads (original / processed / meta2D).
- Additional modules for gene search, virulence factors, and drug interactions.
- Freely available through the **PlasmoRhythm** web platform.

---

## Dependencies

- Apache + PHP
- MySQL / MariaDB
- PHP extensions: `mysqli`, `pdo_sqlite` (download catalog)

---

## Usage

### Clone the repository

```bash
git clone https://github.com/bhanukorra/PlasmoRhythm.git
```

### Navigate to the directory

```bash
cd PlasmoRhythm
```

### Run locally (optional)

1. Install Apache, PHP, and MySQL (e.g. LAMPP / XAMPP).
2. Import the PlasmoRhythm MySQL database dump (provided with the archival data release / Zenodo deposit).
3. Configure database credentials in a local config file (do not commit passwords).
4. Place the project under the web root and open `index.html`.

For routine use, access the live web database (recommended) rather than running a local copy.

**Web database:** [ADD LIVE URL]

---

## Availability

- **Website:** [ADD LIVE URL]  
- **GitHub:** https://github.com/bhanukorra/PlasmoRhythm  
- **Archival DOI (Zenodo):** https://doi.org/10.5281/zenodo.XXXXXXX *(add after deposit)*  

---

## Citation

If you use PlasmoRhythm, please cite:

> [Authors]. PlasmoRhythm: … *Bioinformatics* (manuscript BIOINF-2026-0275). [DOI when available]

---

## Developer

**CG&T Lab, Indian Institute of Technology Hyderabad**

📩 Email: [cgntlab@gmail.com](mailto:cgntlab@gmail.com)

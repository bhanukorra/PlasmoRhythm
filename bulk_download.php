<?php
/**
 * PlasmoRhythm v1.0 — Bulk Download
 * Zips all data files and serves as a single download.
 */

$files = [
    'Archive/Pfalci_combined.xlsx',
    'Archive/Pchabaudi_RijoFerreira_Subudhi_combined.xlsx',
    'Archive/Pvivax_Bozdech_Motta_combined.xlsx',
    'Archive/Pberghei_Bento_sporozoite_combined.xlsx',
    'Archive/Anopheles_Bento2025.xlsx',
    'Archive/Anopheles_Rund2011_combined.xlsx',
    'Ex_vivo_Pvivax_Motta2023_Host_combined/host.xlsx',
    'Archive/Metabolomics_olszewski_tewari_combined.xlsx',
    'Archive/Proteomics_Foth.xlsx',
    'Archive/Proteomics_Bento.xlsx',
    'Archive/RVF_Module.xlsx',
    'Archive/RAID_Module.xlsx',
];

$zipName = 'PlasmoRhythm_v1.0_BulkDownload.zip';
$zipPath = sys_get_temp_dir() . '/' . $zipName;

$zip = new ZipArchive();
if ($zip->open($zipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
    http_response_code(500);
    echo "Error: Could not create ZIP archive.";
    exit;
}

foreach ($files as $file) {
    $fullPath = __DIR__ . '/' . $file;
    if (file_exists($fullPath)) {
        $zip->addFile($fullPath, basename($file));
    }
}

$zip->close();

// Serve the ZIP file
header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="' . $zipName . '"');
header('Content-Length: ' . filesize($zipPath));
header('Cache-Control: no-cache');
readfile($zipPath);

// Clean up temp file
unlink($zipPath);
exit;
?>

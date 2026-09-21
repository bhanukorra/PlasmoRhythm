<?php
$siteRoot   = dirname(__FILE__); 
$mappedBase = $siteRoot . '/Mapped_datasets_7_11_25/';
$file = 'Plasmodium_falciparum/Babbit et al/3D7_isoleucine_control_Babbitt2012/MetaCycle_output/3D7_isoleucine_control_Babbitt2012_meta2d_ouput.csv';

$targetBasename = basename($file);
echo "Target basename: $targetBasename\n";

$cleanName = preg_replace('/\.(csv|xls|xlsx|txt|tsv)$/i', '', $targetBasename);
echo "Clean1: $cleanName\n";

$cleanName = preg_replace('/_(processed|original|meta2d_output|meta2D_output|meta2d_ouptut|meta2D_ouptut|meta2d_ouput)$/i', '', $cleanName);
echo "Clean2: $cleanName\n";

$searchPattern = str_replace(['_', '-', ' '], '[-_ ]*', preg_quote($cleanName, '/'));
echo "Search pattern: $searchPattern\n";

function findFileByFuzzyName($cleanName, $searchDir) {
    if (!is_dir($searchDir)) return null;
    $searchPattern = str_replace(['_', '-', ' '], '[-_ ]*', preg_quote($cleanName, '/'));
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($searchDir, RecursiveDirectoryIterator::SKIP_DOTS));
    foreach ($it as $fileInfo) {
        if ($fileInfo->isFile()) {
            $fileName = $fileInfo->getFilename();
            if (preg_match('/' . $searchPattern . '/i', $fileName)) {
                return $fileInfo->getRealPath();
            }
        }
    }
    return null;
}

$searchDir = $mappedBase . 'Transcriptomics/Plasmodium_falciparum';
$filePath = findFileByFuzzyName($cleanName, $searchDir);
echo "Found path: " . var_export($filePath, true) . "\n";
?>

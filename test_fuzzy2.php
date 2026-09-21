<?php
$cleanName = "3D7_isoleucine_control_Babbitt2012";
$searchPattern = preg_quote($cleanName, '/');
$searchPattern = preg_replace('/[_\-\s]+/', '[-_ ]*', $searchPattern);
echo "New search pattern: $searchPattern\n";

$mappedBase = dirname(__FILE__) . '/Mapped_datasets_7_11_25/';
$searchDir = $mappedBase . 'Transcriptomics/Plasmodium_falciparum';

function findFileByFuzzyName($cleanName, $searchDir) {
    if (!is_dir($searchDir)) return null;
    $searchPattern = preg_quote($cleanName, '/');
    $searchPattern = preg_replace('/[_\-\s]+/', '[-_ ]*', $searchPattern);
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

$filePath = findFileByFuzzyName($cleanName, $searchDir);
echo "Found path: " . var_export($filePath, true) . "\n";
?>

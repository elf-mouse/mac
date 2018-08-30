<?php
date_default_timezone_set('Asia/Shanghai');
define('DS', DIRECTORY_SEPARATOR);

$source_dir = '/path/to/project';
$exp_dir = '/var/www/sourcetree/output';

if ($argc == 0) {
    exit('Nothing to copy');
}

function ExportOneFile($path) {
    global $source_dir, $exp_dir;

    $final_source = $source_dir.DS.$path;
    $final_dest = $exp_dir.DS.$path;

    $final_dest_dir = dirname($final_dest).DS;
    if (!is_dir($final_dest_dir)) {
        mkdir($final_dest_dir, 0777, true);
    }
    return @copy($final_source, $final_dest);
}

foreach ($argv as $index => $path) {
    if ($index === 0) {
        continue;
    }
    if (ExportOneFile($path)) {
        echo $index.' : '.$path." exported." . PHP_EOL;
    }
}

echo PHP_EOL. "All Complete. Please go to {$exp_dir} to view files" . PHP_EOL . PHP_EOL;

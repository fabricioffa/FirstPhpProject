<?php 

$file = fopen(FILES_PATH . 'transactions_1.csv', 'r');
$fileContent = [];


if ($file) {
    while (($line = fgets($file)) !== false) {
        var_dump($line);
        array_push($fileContent, preg_split('/\D,\D/', $line));
    }
    fclose($file);
}

<?php

$printWithBreaks = function ($content) {echo "<br /> . $content . <br />";};

// mkdir('foo/bar', recursive: true);
// rmdir('foo');

$file = 'echoPrint.php';

if (file_exists($file)) {
    echo filesize($file);

    file_put_contents($file, 'echo $x;');

    clearstatcache();
    echo filesize($file);
} else {
    echo 'File not found.';
}

$file = fopen('functionsTypes.php', 'a+');

while (($line = fgets($file)) !== false) {
    echo $line . '<br />';
}

$fileContent = file_get_contents('functionsTypes.php');

$printWithBreaks($fileContent);
file_put_contents('functionsTypes.php', '// Passie por aqui');
$printWithBreaks($fileContent);
str_replace('Passie', 'Passei*', $fileContent);
$printWithBreaks($fileContent);

fclose('functionsTypes.php');

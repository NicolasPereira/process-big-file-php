<?php

use App\Fibers\ReadFileFibers;

require_once '../../vendor/autoload.php';

$reader = new ReadFileFibers('../file.csv');

$fiber = new Fiber(function () use ($reader) {
    return $reader->lerArquivo();
});
echo $fiber->start();
while ($item = $fiber->resume()) {
    printf('%s tem %d anos%s', $item[0], $item[1], PHP_EOL);
}

$memoria = round(memory_get_peak_usage() / 1024, 0);
$tamanho =round(filesize('../file.csv') / 1024 / 1024, 0);

echo "Memória utilizada: " . $memoria . "KB" . PHP_EOL;
echo "Tamanho do arquivo: " . $tamanho . "MB" . PHP_EOL;
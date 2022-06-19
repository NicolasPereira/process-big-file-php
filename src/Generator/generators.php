<?php

use App\Generator\ReadFileGenerators;

require_once '../../vendor/autoload.php';

$leitor = new ReadFileGenerators('../file.csv');
$conteudo = $leitor->lerArquivo();

foreach ($conteudo as $item) {
        printf('%s tem %d anos%s', $item[0], $item[1], PHP_EOL);
}

$memoria = round(memory_get_peak_usage() / 1024, 0);
$tamanho =round(filesize('../file.csv') / 1024 / 1024, 0);

echo "Memória utilizada: " . $memoria . "KB" . PHP_EOL;
echo "Tamanho do arquivo: " . $tamanho . "MB" . PHP_EOL;
<?php

use App\Generator\ReadFileGenerators;

require_once '../../vendor/autoload.php';

$leitor = new ReadFileGenerators('../file.csv');
$conteudo = $leitor->lerArquivo();

foreach ($conteudo as $item) {
        printf('%s tem %d anos%s', $item[0], $item[1], PHP_EOL);
}
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
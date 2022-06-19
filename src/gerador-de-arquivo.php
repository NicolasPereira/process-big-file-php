<?php
$arquivo = fopen('file.csv', 'w');

for ($i = 1; $i < 10_000_000; $i++){
    $nome = "Nome $i";
    $idade = rand(10, 100);
    fputcsv($arquivo, [$nome, $idade]);
}
fclose($arquivo);
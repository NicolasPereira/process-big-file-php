<?php

namespace App\Generator;

class ReadFileGenerators
{
    private $arquivo;
    public function __construct(string $nomeArquivo)
    {
        $this->arquivo = fopen($nomeArquivo, 'r');
    }

    public function lerArquivo(): iterable
    {
        while(!feof($this->arquivo)) {
            yield fgetcsv($this->arquivo);
        }
    }

    public function __destruct()
    {
       fclose($this->arquivo);
    }
}
<?php

namespace App\Fibers;

use Fiber;

class ReadFileFibers
{
    private $arquivo;
    public function __construct(string $nomeArquivo)
    {
        $this->arquivo = fopen($nomeArquivo, 'r');
    }

    public function lerArquivo()
    {
        while(!feof($this->arquivo)) {
            Fiber::suspend(fgetcsv($this->arquivo));
        }
    }

    public function __destruct()
    {
       fclose($this->arquivo);
    }
}
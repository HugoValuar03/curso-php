<?php

namespace exercicios;

class Pessoa
{
    public $nome = "hugo";
    public $idade;

    function andar(): void
    {
        echo "O $this->nome está andando";
    }
}

$hugo = new Pessoa();
$hugo->andar();
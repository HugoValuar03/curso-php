<?php

namespace heranca;

require_once "Pessoa.php"; // Necessita "importar" a classe que está sendo extendida

class Programador extends Pessoa{
    function programar(): void
    {
        echo "Estou Programando!";
    }
}

$hugo = new Programador();

$hugo->falar();
$hugo->programar();
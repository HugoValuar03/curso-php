<?php

namespace exercicios\escola;

require_once "Humano.php";

class Professor extends Humano
{
    private $salario;
    private $materia_lecionada;

    function ensinar(){
        echo "Estou ensinando <br>";
    }
}

$roberto = new Professor();
$roberto->setNome("Roberto");
$roberto->ensinar();
$roberto->falar();
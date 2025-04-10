<?php

namespace exercicios\escola;

require_once "Humano.php";

class Aluno extends Humano
{
    private $matricula;
    private $materia;

    function aprender(){
        echo "Estou aprendendo <br>";
    }
}

$hugo = new Aluno();
$hugo->setNome("Hugo");
$hugo->aprender();
$hugo->falar();
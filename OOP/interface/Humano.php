<?php

require_once "Caracteristicas.php";

class Humano implements Caracteristicas
{
    public $idade = 29;


    public function falar()
    {
        echo "Hello world!";
    }
}

$hugo = new Humano();
$hugo->falar();
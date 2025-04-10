<?php

namespace constantes;

class Humano
{
    public const  OLHOS = 2;
    public const  BRANCOS = 2;
    public const  PERNAS = 2;
}

$matheus = new Humano;

echo $matheus::OLHOS . "<br>";
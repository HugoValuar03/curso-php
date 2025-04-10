<?php

/*
 * is_object() => Verifica se uma variável é um objeto;
 * get_class() => Verifica a classe de um objeto;
 * method_exists() => Verifica se um método existe em um objeto;
 * */

namespace verificando_objetos;

class Humano
{
    public function falar(){
        echo "Olá";
    }
}

$matheus = new Humano;

$teste = 10;

if(is_object($matheus)){
    echo "É um objeto" . "<br>";
} else {
    echo "Não é um objeto" . "<br>";
}

if(is_object($teste)){
    echo "É um objeto" . "<br>";
} else {
    echo "Não é um objeto" . "<br>";
}

echo get_class($matheus) . "<br>";

if(method_exists($matheus, "falar")){
    echo "Existe o método falar";
}
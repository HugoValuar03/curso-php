<?php

namespace ancestralidade;

/*
 * Para checar a ancestralidade de uma classe utiliza-se o operador instanceof
 * Pode-se inserir essa operação em um if, pois vai retornar um booleano;
 * */

class Humano
{

}

$marcos = new Humano;

if($marcos instanceof Humano){
    echo "Marcos é um humano";
}

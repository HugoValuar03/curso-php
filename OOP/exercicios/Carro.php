<?php

namespace exercicios;

class Carro
{
    private $velocidade_maxima;

    function setVelocidadeMaxima($velocidade_maxima){
        $this->velocidade_maxima = $velocidade_maxima;
    }

    function getVelocidadeMaxima(){
        echo "A velocidade máxima do carro é $this->velocidade_maxima" . "Km/h";
    }
}

$ferrari = new Carro;

$ferrari->setVelocidadeMaxima(250);
echo $ferrari->getVelocidadeMaxima();
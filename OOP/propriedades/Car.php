<?php

namespace propriedades;

    class Car {
        public $rodas = 4;
        public $aro = 20;
        public $cor = "azul";
    }

    $ferrari = new Car();

    echo $ferrari->rodas . "<br>";
    echo $ferrari->aro . "<br>";

    $ferrari->cor = "vermelho";

    echo $ferrari->cor . "<br>";
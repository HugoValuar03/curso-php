<?php
    function teste(){
        $a = 0;
        $a++;
        echo "Valor de a: $a <br>";
    }

    teste();
    teste();
    teste();

    echo "<br>";

    /** Quando há uma vriável estática, ela mantém o valor entre as chamadas da função.
    * Ou seja, ela não é reinicializada a cada chamada da função.
    */
    function testeStatic(){
        static $a = 0;
        $a++;
        echo "Valor de a: $a <br>";
    }

    testeStatic();
    testeStatic();
    testeStatic();
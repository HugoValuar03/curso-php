<!--
- A função array_reduce tem como objetivo reduzir um array a apenas um valor;
- Podemos passar uma segunda função como parâmetro, para algum processo ser executado;
    array_reduce($arr, $funcao);
-->

<?php
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    function soma($a, $b){
        return $a + $b;
    }

    $resultado = array_reduce($arr, "soma");

    echo "$resultado" . "<br>";

    function subtracao($a, $b){
        return $a - $b;
    }

    $resultado2 = array_reduce($arr, "subtracao");
    echo "$resultado2" . "<br>";
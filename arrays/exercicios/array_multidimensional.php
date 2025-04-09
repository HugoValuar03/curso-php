<!-- 
- Crie um array multidimensional com 3 arrays que tem 4 elementos cada;
- Imprima todos os elementos de cada um dos arrays;
- Imprima também quando está mudando de array 
-->

<?php
    $arrMulti = [
        [1,2,3,4],
        [5,6,7,8],
        [9,10,11,12],
    ];

    for ($i = 0; $i < count($arrMulti); $i++) {
        echo "Imprimindo array externo " . ($i + 1) . "<br>";
        for ($j = 0; $j < count($arrMulti) + 1; $j++) {
            echo $arrMulti[$i][$j] ."<br>";
        }
    }
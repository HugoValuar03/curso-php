<!-- 
- Quando inserimos arrays dentro de arrays formamos um array multidimensional, também conhecido como matriz;
- Para acessar este tipo de array também utilizamos índices, acessando o externo e depois os internos;
- Ex: $arr[1][0] => Primeiro elemento do segundo array 
-->

<?php
    $arrMulti = [
        [1,2,3],
        [2,3,4]
    ];

    print_r($arrMulti);
    echo "<br>";

    echo $arrMulti[0][1] . "<br>"; // acessando primeiro array, e segundo elemento
    echo $arrMulti[1][2] . "<br>"; // acessando segundo array, e último elemento
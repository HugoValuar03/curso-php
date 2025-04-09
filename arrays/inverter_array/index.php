<!--
- Com a função array_reverse podemos obter o array ao inverso;
- Passamos apenas o array como argumento;
- O retorno será um array invertido do original;
-->

<?php
    $arr = [1, 2, 3, 4, 6, 9];

    print_r($arr);

    $array_invertido = array_reverse($arr);
    echo "<br>";

    print_r($array_invertido);
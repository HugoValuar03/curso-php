<!--
- Pode-se unir arrays, a ação também é conhecida como merge;
- A função que vamos utilizar é a array_merge;
- Que como argumento aceita um número indeterminado de arrays;
-->

<?php
    $arr = [1, 2, 3];
    $arr2 = ["oi", "tchau"];

    $arr_arr2 = array_merge($arr, $arr2);

    print_r($arr_arr2);

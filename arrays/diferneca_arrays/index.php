<!--
- Podemos verificar qual a diferença entre dois ou mais arrays com PHP;
- A função que vamos utilizar para isso é a array_diff;
- Esta função aceita um número indeterminado de arrays;
-->

<?php
    $arr = [1, 2, 3];
    $arr2 = [2, 3, 4];

    $diferenca_array = array_diff($arr, $arr2); // Diferença do array 1 para o array 2

    print_r($diferenca_array);

    $diferenca_array = array_diff($arr2, $arr); // Diferença do array 2 para o array 1
    print_r($diferenca_array);
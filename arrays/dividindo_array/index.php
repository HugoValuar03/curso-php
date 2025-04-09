<!-- 
- Podemos dividir um array grande em diversos arrays de número de elementos iguais;
- Será utilizado a função array_chunk;
- Passa-se o array como argumento e também o número de elementos que cada array deve ter;
-->

<?php
    $arr = range(1,20);

    print_r(array_chunk($arr, 4));

    echo "<br>";
    echo "<br>";
    $arrays = array_chunk($arr, 10);
    print_r($arrays);
    echo "<br>";
    echo "<br>";
    print_r($arrays[1]);
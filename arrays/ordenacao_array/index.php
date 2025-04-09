<!--
- Para ordenar em ordem crescente podemos utilizar a função sort em um array;
- Para ordenar de forma inversa utilizamos rsort;
-->

<?php
    $arr = [4, 1, 2, 5, 6, 3, 9, 7];

    sort($arr);

    print_r($arr);
    echo "<br>";

    rsort($arr);

    print_r($arr);
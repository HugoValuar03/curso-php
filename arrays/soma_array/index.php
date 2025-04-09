<!--
- Para somar os itens de um array usa-se a função array_sum;
- Ela nos retorna a soma de todos os elementos numéricos do array que passamos como argumento;
-->

<?php
    $arr = [1, 2, 3, 4, 5];

    $soma_array = array_sum($arr);

    echo $soma_array;

    echo "<br>";

    $arr2 = ["oi", "tchau"];

    $soma_array2 = array_sum($arr2); // Se tentar somar string retorna 0

    echo $soma_array2;
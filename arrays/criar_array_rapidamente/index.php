<!-- 
- Pode-se utilizar a função range para criar um array de forma rápida;
- Exemplo: range(1,10);
- Um array de 1 a 10 será criado, podemos atribuir este valor a uma variável 
-->

<?php   
    $arr = range(1, 10); // Estrutura: range(começo, final);
    print_r($arr);
    echo "<br>";

    // Colocar um intervalo
    $arr2 = range(0, 10, 2); // Estrutura: range(começo, final, intervalo);
    print_r($arr2);
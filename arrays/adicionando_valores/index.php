<!-- 
- Podemos criar novos índices com dados em um array;
- Basta por o nome do array com o novo índice em colchetes e atribuir um valor;
- Ex: $arr[1] = "teste";
- E em arrays associativos basta utilizar o nome da nova chave com a atribuição de valor;  
-->
<?php
    $arr = [];
    print_r($arr);
    
    echo  "<br>";
    $arr[0] = 10;
    print_r($arr);
    echo  "<br>";
    $arr[1] = 20;
    print_r($arr);
    echo  "<br>";
    $arr[2] = 30;
    print_r($arr);
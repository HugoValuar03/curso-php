<!-- 
- Podemos adicionar valor ao fim de um array utilizando a atribuição sem determinar um índice;
- Então o valor atribuído será enviado para o último e novo índice do array;
- Exemplo: $arr[] = 5; 
-->
<?php
    $arr = [1,2,3];
    
    print_r($arr);
    echo "<br>";
    $arr[] = 4;

    print_r($arr);
    echo "<br>";
    
    $arr2 = [];
    $arr2[] = 5;
    
    print_r($arr2);
    echo "<br>";
    $arr2[] = 6;
    
    print_r($arr2);
    echo "<br>";

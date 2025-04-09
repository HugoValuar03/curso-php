<!-- 
- Podemos remover elementos de um array com a função array_splice;
- Passamos como parâmetro o array, índice inicial e quantos elementos queremos remover;
- Ex: array_splice($arr, 2, 1) => A partir do índice 2, remove 1 elemento; 
-->

<?php
    // RESGATAR ELEMENTOS DE ARRAY
    // REMOVER ELEMENTOS
    $arr = [1,2,3,4,5,6];
    $removidos = array_splice($arr,1,2);
    print_r($arr);
    echo "<br>";
    print_r($removidos); // Retorna os elementos removidos
    echo "<br>";
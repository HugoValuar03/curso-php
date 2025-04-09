<!-- 
- Com a função array_slice podemos resgatar uma faixa de elementos de um array;
- Passamos 3 parâmetros: o array, índice inicial, e quantos elementos queremos resgatar a partir do índice; 
-->

<?php
    $arr = [2,4,6,8,10,2,14,16,18];

    $slice1 = array_slice($arr,1,3);

    print_r($slice1); // Retorno Array ( [0] => 4 [1] => 6 [2] => 8 )
    echo "<br>";
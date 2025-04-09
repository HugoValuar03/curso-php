<!-- 
- Com a função array_keys recebemos um array apenas com as chaves de um array
- Com a função array_values recebemos um array com apenas os valores de um array; 
-->

<?php

    $carro = [
        'marca' => 'BMW',
        'motor' => '2,4',
        'teto_solar' => true,
        'cambio' => 'Manual',
        'portas' => 4
    ];

    $chaves = array_keys($carro);

    print_r($chaves);
    echo "<br>";

    $valores = array_values($carro);
    print_r($valores);
    echo "<br>";
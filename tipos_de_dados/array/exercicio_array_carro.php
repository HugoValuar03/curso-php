<?php
    $carro = [
        'marca' => 'Fusca',
        'placa' => 'ABC-1234',
        'cor' => 'Azul',
        'ano' => 1970
    ];
    print_r($carro);

    $marca = $carro['marca'];
    $cor = $carro['cor'];

    echo "O meu carro é da marca $marca e a cor é $cor"
?>
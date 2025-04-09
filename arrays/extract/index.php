<!--
- Com a função extract podemos criar variáveis rapidamente de arrays associativos;
- O nome da chave será o nome da variável;
- Se houver uma variável já criada com o nome da chave, a mesma será sobrescrita;
-->

<?php
    $arr = [
        'cor' => 'vermelho',
        'forma' => 'retângular',
        'material' => 'aço'
    ];

    extract($arr);

    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";

    echo "<br>";

    $nome = "Matheus";


    $pessoa = [
        'nome' => 'João',
        'idade' => '29'
    ];

    extract($pessoa);
    echo "$nome <br>";
    echo "$idade <br>";
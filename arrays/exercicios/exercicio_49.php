<!--
- Crie variáveis com característica de algum objeto ou animal;
- Depois crie um array com compact com estas mesmas variáveis;
- Faça um loop no array e imprima os valores;
-->

<?php
    $nome = "Cachorro";
    $altura = 120;
    $adulto = true;
    $idade = 8;

    $cachorro = compact("nome", "altura", "adulto", "idade");

    print_r($cachorro);

    echo "<br>";

    foreach($cachorro as $item){
        echo $item . "<br>";
    }

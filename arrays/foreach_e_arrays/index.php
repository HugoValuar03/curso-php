<!--
- Foi Anteriormente visto a estrutura foreach com arrays, pode-se iterar facilmente com ela;
- Utilizando a notação de chave => valor, tem-se acesso rápido também a arrays associativos;
- Exemplo:
    foreach($itens as $key => $value){}
-->

<?php

    $hugo = [
        "nome" => "Hugo",
        "idade" => 20,
        "profissao" => "Programador"
    ];

    $fernando = [
        "nome" => "Fernando",
        "idade" => 24,
        "profissao" => "Eng. Civil"
    ];

    foreach($hugo as $carac => $value){
        echo "$carac => $value <br>";
    }

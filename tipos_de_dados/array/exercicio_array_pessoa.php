<?php
    $pessoa = [
        "nome" => "Hugo",
        "sobrenome" => "Valuar",
        "idade" => 20,
        "altura" => 1.80
    ];

    print_r($pessoa);

    if ($pessoa['idade'] >= 18){
        echo "Você é maior de idade!";
    }

?>
<?php
    // A função is_int() verifica se o valor é um inteiro
    // Se o valor for um inteiro, retorna true, caso contrário, retorna false
    if (is_int(2.3)){
        echo "É um inteiro <br>";
    } else {
        echo "não é um inteiro <br>";
    }

    $valor = 3;

    if (is_int($valor)){
        echo "É um número inteiro";
    }
<!--
- Para ordenar em ordem crescente pelo valor das chaves, podemos utilizar a função arsort;
- Se quisermos ordenar o array pelas chaves, utilizamos o valor ksort
-->

<?php

    $pessoa = [
        "nome" => "Hugo",
        "idade" => 20,
        "sexo" => "Masculino",
        "idioma" => "Portugues"
    ];

    arsort($pessoa);

    print_r($pessoa);

    echo "<br>";

    ksort($pessoa);

    print_r($pessoa);

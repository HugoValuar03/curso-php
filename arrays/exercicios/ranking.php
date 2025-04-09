<!--
- Crie um array associativo com chaves com valor de nomes, e valores com uma pontuação;
- Ordene os dados do maior para o menor;
- Exiba uma lista, simulando um ranking, em HTML;
-->

<?php

    $ranking = [
        "João" => "9 pontos",
        "Fernanda" => "2 pontos",
        "Robson" => "7 pontos",
        "Mário" => "5 pontos",
        "Larissa" => "10 pontos",
        "Hugo" => "10 pontos",
    ];

    arsort($ranking);

    print_r($ranking);

?>

<ol>
    <?php foreach ($ranking as $key => $value): ?>
    <li><?= $key; ?> => <?= $value; ?></li>
    <?php endforeach;?>
</ol>
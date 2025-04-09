<!-- 
- Podemos criar muitas variáveis com base em um array;
- Para isso vamos utilizar a função list;
Ex: list($nome, $idade, $profissao) = $pessoa; 
-->

<?php
    $pessoa = ["Matheus", 29, "Programador", "verde"];
    print_r($pessoa);
    echo "<br>";
    list($nome, $idade, $profissao, $cor_dos_olhos) = $pessoa;

    echo "O nome da pessoa é $nome, tem $idade anos, atua coma $profissao, e a cor dos olhos é $cor_dos_olhos";

        
<!-- 
- Podemos alterar as strings para maíusculas ou minúsculas com funções de PHP;
- strtolower: Todas as letras minúsculas;
- strtoupper: Todas as letras maiúsculas;

- Também pode-se alterar o case apenas das palavras com funções de PHP;
- ucfirst: Primeira letra da string em maiúscula;
- ucwords: Primeira letra de cada palavra em maiúscula;
-->
<?php
    $str = "esta string esta em caixa baixa <br>";
    echo strtoupper($str);

    $str2 = "ESTA ESTA EM CAIXA ALTA <br>";
    echo strtolower($str2);

    $str3 = "nesta frase a primeira palavra vai ficar com a primeira letra em maiuscula<br>";
    echo ucfirst($str3);

    $str4foreachFirst = "nesta frase cada palavra vai ficar com a letra maisucula";
    echo ucwords($str4foreachFirst);
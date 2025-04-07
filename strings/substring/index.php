<!-- 
- Com a função substr, podemos resgatar apenas uma parte da string;
- Ex: substr(str,inicio,fim);
- str é a string que vamos procurar algo;
- inicio é o índice inicial da palavra ou texto;
- fim é o índice final da palavra ou texto;
-->
<?php
    $str = "Esta é a minha string"; // Se tiver acentuação conta como dois caractéres
    $minha = substr($str, 10, 5);
    echo $str . "<br>";
    echo $minha . "<br>";

    $str2 = "Testando esta string <br>";
    $esta = substr($str2, 9, 4);
    echo $str2 . "<br>";
    echo $esta;
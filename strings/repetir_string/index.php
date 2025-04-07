<!-- 
- Com a função str_repeat pode-se repetir n vezes uma determinada string;
- O primeiro argumento é a string que será repetida;
- O segundo é o número de repetições; 
-->
<?php
    $num_repeticao = 5;
    $str = "Esta string será repetida $num_repeticao vezes<br>";
    $strRep = str_repeat($str, $num_repeticao);
    echo $strRep;
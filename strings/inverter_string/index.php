<!-- 
- Podemos com PHP inverter uma string, a função strrev realiza esta ação;
- Ela recebe a string que será invertida como parâmetro; 
-->
<?php
    $str = "Esta string ficara invertida";
    $strinv = strrev($str);
    echo $str . "<br>";
    echo $strinv;
<!-- 
- Crie um array com a função range de 10 a 45;
- Imprima todos os números com uma soma de 6;
- Se passar de 30 a soma, imprima também que o número é muito alto; 
-->

<?php
    $arr = range(10,45);

    foreach ($arr as $value){
        if($value+6 <= 30){
            echo $value+6 . "<br>";
        } else {
            echo "O número " . $value + 6 . " Esse número é muito alto" . "<br>";
        }
    }
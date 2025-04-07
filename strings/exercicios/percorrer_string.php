<!-- 
- Percorra a string: "O rato roeu a roupa do rei de Roma" a partir de um loop;
- Imprima o número de letras "a" desta string; 
-->

<?php
    $str = "O rato roeu a roupa do rei de Roma";
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++){
        if($str[$i] == "a"){
            $count++;
        }
    }

    echo $count;
<?php
    function par_impar($numero){
        if($numero % 2 == 0){
            return "O número $numero é par";
        } else {
            return " O número $numero é impar";
        }
    }

    $resultado = par_impar(4124123124124312);

    echo $resultado;
<?php
    echo true;
    echo "<br>";

    if (true){
        echo "É verdadeiro! <br>";
    }

    // Checando se é boolean
    $booleano = true;

    if(is_bool($booleano)){
        echo "$booleano É booleano";
    }
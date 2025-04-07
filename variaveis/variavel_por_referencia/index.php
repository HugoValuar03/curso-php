<?php
    $x = 6;
    $y =& $x; // O $y pega o valor de $x por referência

    echo "Valor de x: $x <br>";
    echo "Valor de y: $y <br>";
<!-- 
- Podos converter uma string em array com a função "explode"
- Passamos primeiro o separador como argumento;
- Depois a string que vai ser convertida; 
-->

<?php
    $frase = "Testando o explode";

    $fraseArray = explode(" ", $frase);

    print_r($fraseArray);
    echo "<br>";

    $fraseArray2 = explode(",", $frase);
    print_r($fraseArray2);

    echo "<br>";

    $fraseB = "Carro, Avião, Barco, Navio";
    $fraseBArray = explode(",", $fraseB);
    print_r($fraseBArray);
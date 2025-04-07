<!-- 
- Podemos converter um array em string com a função "implode";
- Passamos primeiro o separador como argumento;
- Depois a string que vai ser convertida; 
-->
<?php
    $array = ["Testando", "o", "implode"];

    $str = implode(" ", $array);

    print_r($str);
    echo "<br>";

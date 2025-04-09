<!-- 
- Crie um array com os valores: batata, maçã, pera, feijão e arroz;
- Remova pera e feijão; 
-->

<?php
    $arr = ["batata", "maçã", "pera", "feijão", "arroz"];

    array_splice($arr,2,2);

    print_r($arr);
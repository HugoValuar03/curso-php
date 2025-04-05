<!-- 
- Crie uma função que recebe um array de números;
- Crie um novo array com apenas os números que são maiores que 7;
- Retorne este novo array e imprima na tela;
-->

<?php
    function filtrarMaiorQue7($arr){
        $resultado = [];

        foreach($arr as $num){
            if($num > 7){
                $resultado[] = $num;
            }
        }
        return $resultado;
    }

    $arrayMaiorQue7 = filtrarMaiorQue7([1,2,3,4,5,6,7,8,9,10,190,191,192]);

    $impl_array = implode(", ", $arrayMaiorQue7);
    print_r($impl_array);
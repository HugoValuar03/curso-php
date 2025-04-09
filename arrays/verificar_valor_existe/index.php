<!-- 
- Com a função array_key_exists podemos verificar se há um vlaor em uma respectiva key de um array;
- Pode-se fazer essa checagem em um if;
- Ex: array_key_exists("nome", $arr);
- Outra função que pode-se utilizar para este fim é a isset; 
-->

<?php
    $arr = [
        'nome' => 'Hugo',
        'idade' => 20
    ];

    if(array_key_exists("nome", $arr)){
        echo "A chave existe" . "<br>";
    } else{
        echo "A chave não existe" . "<br>";
    }
    
    if(isset($arr['nome'])){
        echo "Utilizando isset, a chave está presente";
    }
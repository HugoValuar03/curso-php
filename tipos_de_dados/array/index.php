<?php
    /*
    * O array é um tipo de dado que serve para agrupar um conjunto de valores;
    * Podemos inserir qualquer tipo de dado na lista;
    * A sintaxe é: [1,2,3,4,5];
    * Sempre entre [], dados separados por ,;
    */

    $a = [1,2,3];
    
    print_r($a); // print_r serve para imprimir o array
    echo "<br>";

    echo $a[0]; // Acessando um índice do array
    echo "<br>";

    $arr = ["Hugo", 1, true]; // Um array é capaz de ter vários tipos de dados em um único array
    print_r($arr);
    echo "<br>";
    // Arrays associativos
    /**
     * O array associativo é basicamente um array, porém com chave e valor;
     * A estrutura base é a mesma, mas pode-se consetruir da seguinte maneira:
     * $arr = ['nome'=>'Hugo', 'idade' => 20]
     * Chave entre aspas, seta para apontar o valor e valor
     */

     $arr_associativo = ['nome'=>'Tobey','sobrenome' => 'Maguire', 'idade'=>40];
     print_r($arr_associativo);

     echo '<h1>Order processed.</h1>';
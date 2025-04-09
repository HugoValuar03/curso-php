<!--
- A função in_array verifica se um item passado por parâmetro está no array;
- O retorna é true se encontrar o item e false se não encontrar;
- Vamos passa dois argumentos para a função, exemplo:
    in_array("item", $arr)
-->

<?php
    $arr = ["Batata", "Banana", "Tomate", "Alface"];

    if(in_array("Batata", $arr)){
        echo "Tem a batata";
    }

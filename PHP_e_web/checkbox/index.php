<?php

/**
 * Os inputs de checkbox podem conter mais de um valor;
 * para receber todos os eles no backend, precisamos adicionar uma sintaxe de array no name;
 * Assim receberemos todos os inputs marcados;
 * Exemplo:
 *  name="caracteristicas[]"
 */

    if(isset($_POST['ingredientes'])){
        $ingredientes = $_POST['ingredientes'];

        print_r($ingredientes);
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <!--Se não é colocado a sintaxe de array no "name", como por exemplo name="ingredientes[]", ele vai pegar apenas um
    valor, então se for mais de um selecionado não vai colocar em um array-->
    <div>
        <input type="checkbox" name="ingredientes[]" value="Tomate"> Tomate
    </div>
    <div>
        <input type="checkbox" name="ingredientes[]" value="Abóbora"> Abóbora
    </div>
    <div>
        <input type="checkbox" name="ingredientes[]" value="Feijão"> Feijão
    </div>
    <div>
        <input type="checkbox" name="ingredientes[]" value="Alface"> Alface
    </div>
    <div>
        <input type="checkbox" name="ingredientes[]" value="Cebola"> Cebola
    </div>
    <div>
        <input type="submit" value="enviar">
    </div>

</form>
</body>
</html>

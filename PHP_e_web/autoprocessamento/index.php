<?php
    $method = $_SERVER['REQUEST_METHOD'];

    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
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
    <?php
        if($method == 'GET'):
    ?>
    <form action="index.php" method="post">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php else: ?>
        <h1>O seu nome é <?= $nome ?> </h1>
    <?php endif; ?>
</body>
</html>
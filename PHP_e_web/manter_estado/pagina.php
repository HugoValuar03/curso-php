<?php

    if(isset($_COOKIE["nome"])){
        $nome = $_COOKIE["nome"];
    }
    
    print_r($nome);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página</title>
</head>
<body>
    <?php if($nome != ""): ?>
        <p>Seja bem vindo <?= $nome ?></p>
    <?php endif; ?>
</body>
</html>

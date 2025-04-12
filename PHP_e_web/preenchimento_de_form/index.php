<?php

    $usuario = [
        'nome' => 'Hugo',
        'email' => 'hugo@email.com',
        'idade' => 20
    ];

    if($usuario){
        $nome = $usuario['nome'];
        $email = $usuario['email'];
        $idade = $usuario['idade'];
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
    <form action="">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>">
        </div>
        <div>
            <input type="email" name="email" placeholder="Digite seu email" value="<?= $email ?>">
        </div>
        <div>
            <input type="number" name="nome" placeholder="Digite sua idade" value="<?= $idade ?>">
        </div>
    </form>
</body>
</html>

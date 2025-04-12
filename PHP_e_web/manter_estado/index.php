<?php
/**
 * O HTTP é um protocolo que não mantém o estado (stateless);
 * Ou seja, após o fim da requisição a conexão entre o usuário e servidor é finalizada, a próxima conexão não possui
 * mais relação entre ambos;
 * Para conseguir manter estes dados podemos utilizar os cookies;
 * O problema desta abordagem é que alguns navegadores não permitem o uso de cookies ou o bloqueiam;
 */

    setcookie("nome", "Matheus", time() + 3600);

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
    <title>Document</title>
</head>
<body>
    <h1>Olá mundo</h1>
    <?php if($nome != ""): ?>
        <p>Seja bem vindo <?= $nome ?></p>
    <?php endif; ?>
</body>
</html>

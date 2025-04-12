<?php
/**
 * A validação é uma parte importante do recebimento de dados;
 * Devemos checar se os dados enviados condizem com o que estamos esperando;
 * Para isso podemos criar condicionais fazendo as verificações;
 * Caso alguma não atenda ou um campo obrigatório esteja vazio, retornamos uma mensagem ao usuário;
 * Obs: é possível fazer validações com HTML e também JavaScript;
 */

    // Realizando as validações
    $validacoes = [];
    if(count($_POST) > 0){
        if($_POST['nome'] === ""){
            $validacoes[] = "Porfavor, preencha o nome do usuário!";
        }
        if($_POST['email'] === ""){
            $validacoes[] = "Porfavor, preencha o e-mail do usuario!";
        }
        if($_POST['senha'] != $_POST['confirmacao']){
            $validacoes[] = "As senhas devem ser iguais";
        }
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
    <?php if(count($validacoes)): ?>
        <ul>
            <?php foreach($validacoes as $validacao): ?>
            <li><?= $validacao ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form action="index.php" method="post">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome">
        </div>
        <div>
            <input type="text" name="email" placeholder="Digite seu e-mail">
        </div>
        <div>
            <input type="password" name="senha" placeholder="Digite a sua senha">
        </div>
        <div>
            <input type="password" name="confirmacao" placeholder="Digite a sua senha">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>

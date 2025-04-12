<?php
/**
 * As sessions são salvas em arquivos no computador que estamos ou no servidor da aplicação;
 * O caminho para onde os arquivos são salvos fica em php.ini na configuração session.save_path;
 * As sessions podem ser salvas em dois formatos: O próprio do PHP e também o Web Distributed Data eXchange (WDDX);
 */

    session_start();

//    print_r($_SESSION);

    $_SESSION['nome'] = "Hugo";
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
    <h1>Olá session</h1>
</body>
</html>

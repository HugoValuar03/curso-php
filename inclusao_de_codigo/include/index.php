<!--
    - Com o "include" inserimos um arquivo PHP, ou até mesmo um HTML, em outro;
    - Podemos assim utilizar tudo que está declarado no arquivo incluído;
    - O include não gera erro fatal se o arquivo não existir, e sim um warning;
    - Exemplo:
        include "caminho/para/o/arquivo.php"; 
-->

<?php
     include "teste.php";
?>

<p>Esse é o arquivo index.php</p>
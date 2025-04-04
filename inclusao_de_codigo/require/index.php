<!-- 
    - Com o require, inserimos um arquivo PHP, ou até mesmo um HTML, em outro;
    - Podemos assim utilizar tudo que está declarado no arquivo incluído.
    - O require gera erro fatal se não existir, parando o script;
    - Exemplo:
    - require "caminho/para/o/arquivo.php";
-->

<?php
    require "teste.php";
?>

<p>Resto da informação da página</p>

<?php
    require "arquivos/funcao.php";
?>
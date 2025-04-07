<!-- 
- Podemos remover as tagas de HTML de uma string com uma função strip_tags;
- Geralmente para salvar dados no banco removemos as tags; 
-->
<?php
    $textoHtml = "<p>Testando parágrafo.</p><div> Uma div </div><p>Outro paragrafo</p>";

    echo $textoHtml;

    $salvarTextoBanco = strip_tags($textoHtml);

    echo $salvarTextoBanco; // Irá retornar somente o texto puro
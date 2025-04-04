<!-- 
- Os dois funcionam da mesma maneira que require e include;
- Porém impedem que o mesmo arquivo seja adicionado mais de uma vez ná página;
- Este poder ser o método mais indicado quando estamos montando templates com PHP; 
-->

<?php
    /**
     * 
     */

     include_once "teste2.php";
     include_once "teste2.php"; // Não vai incluir novamente o arquivo, pois já foi incluído uma vez.

     require_once "teste2.php"; // Não vai incluir novamente o arquivo, pois já foi incluído uma vez.

     /**
      * Tanto faz se for require_once ou include_once, se os dois tentarem incluir o mesmo arquivo, só um deles vai funcionar.;
      */

?>

<p>Testando código</p>
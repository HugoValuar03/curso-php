<!-- 
- Com a função parse_url, podemos decompor uma URL; 
- Recebe-se um array com todas as partes que a URL tem;
- Alguns elementos que podem ser retornados são: protocolo, host, parâmetros;
-->
<?php
    $url = "https://www.google.com.br";

    $arrayUrl = parse_url($url);
    print_r($arrayUrl);
    // Retorno esperado: Array ( [scheme] => https [host] => www.google.com.br )
    echo "<br>";

    $url2 = "https://www.google.com.br/?busca=php";
    $arrayUrl2 = parse_url($url2);
    print_r($arrayUrl2);
    // Retorno esperado: Array ( [scheme] => https [host] => www.google.com.br [path] => / [query] => busca=php )
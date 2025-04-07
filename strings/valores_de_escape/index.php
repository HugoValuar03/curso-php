<!-- 
- Podemos utilizar alguns valores que executam funções especiais em strings;
- Precisamos utilizar aspas duplas;
- Exemplos:
    \n = nova linha;
    \t = tab;
    \\ = barra invertida;
    \$ = sinal de dólar; 
-->

<?php

    header("Content-Type: text/plain");

    // Pular linha
    echo "Essa é uma linha\nEssa é outra linha\n";

    // Tabulação
    echo "Essa é uma linha\taqui \n";

    // Barra invertida
    echo "Essa é uma linha\\aqui \n";

    // Dólar
    echo "Imprimindo o Dolar \$ \n";

    
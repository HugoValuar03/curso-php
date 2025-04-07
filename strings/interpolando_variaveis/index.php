<!-- 
- Podemos interpolar variáveis em strings de duas formas;
- Utilizando aspas duplas e colocando a variável e também com chaves e o nome da variável;
- Não há diferença em ambas as formas;
  "Interpolando a variável $teste"
  "Interpolando a variável {$teste}"
-->

<?php
    $idade = 20;

    echo "Eu tenho $idade anos<br>";
    echo "Eu tenho {$idade} anos<br>"; //Mesmo resultado
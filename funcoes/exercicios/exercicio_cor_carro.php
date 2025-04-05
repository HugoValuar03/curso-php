<!-- 
- Crie uma função chamada defineCorCarro;
- Onde há um parâmetro chamado cor, com valor default de vermelho;
- Retorne a cor do carro;
- Imprima o retorno tanto com parâmetro default, como também definindo a cor;
-->

<?php
    function defineCorCarro($cor = "Vermelho"){
        return $cor . "<br>";
    }

    echo defineCorCarro();
    echo defineCorCarro("Verde");
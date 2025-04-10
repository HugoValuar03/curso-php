<?php

/**
 * O objeto DateTime permite tratar a data como um objeto;
 * Podemos passar um parâmetro que será a data criada, se não passarmos nada a data será a atual;
 * Podemos exibir as informações do objeto com print_r;
 * Exemplo:
 *  $dataAtual = new DateTime();
 *
 * Para formatar as datas utiliza-se o format e modify;
 * format => Formata a data;
 * modify => Altera a data;
 */

$dataAtual = new DateTime();

print_r($dataAtual);
echo "<br>";

echo $dataAtual -> format('d/m/Y');
echo "<br>";
echo $dataAtual -> format('d - m - Y');
echo "<br>";

$dataAtual -> modify('+5 days'); // Adiciona 5 dias
echo $dataAtual -> format('d/m/Y');


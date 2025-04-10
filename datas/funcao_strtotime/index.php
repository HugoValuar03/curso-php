<?php
/**
 * Recebe uma string como parâmetro, que é um texto sinalizando tempo;
 * A função tenta interpretar e transformar em data;
 * Veja um exemplo de utilização:
 *  echo date('d/m/y', strtotime('+2 years')); // 2 anos a mais
 */

$d = date ("d/m/Y", strtotime("+5 months, +3 years, +2 days")); //Adicionando 3 anos, 5 meses e 2 dias

echo $d . "<br>";
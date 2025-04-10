<?php
/**
 *  A função date recebe um parâmetro, que é o formato da data, e este é o primeiro parâmetro da mesma;
 * A resposta será a data atual;
 * Exemplo:
 *  date("d/m/y") // day / month / year
 */

$d = date('d/m/y');

echo $d . "<br>";

$d2 = date ("d/m/Y");
echo $d2 . "<br>";
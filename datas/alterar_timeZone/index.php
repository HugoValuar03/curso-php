<?php
/**
 * O PHP por padrão vai utilizar o fuso horário da máquina que está sendo executado, ou seja, do servidor;
 * Porém, podemos alterar manualmente o fuso com a função date_default_timezone_set;
 * Esta função recebe como parâmetro o novo fuso horário em string;
 */

date_default_timezone_set('America/Sao_Paulo');
$date = new DateTime();
print_r($date);
echo "<br>";
print_r($date);
echo "<br>";

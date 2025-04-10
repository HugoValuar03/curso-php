<?php
/**
 * setDate => Recebe ano, mês e dia, alterando completamente a data;
 * setTime => Recebe hora, minuto e segundo, alterando completamente o tempo da data;
 */

$data = new DateTime();

print_r($data);
echo "<br>";

$data -> setDate(1999,12,01);
print_r($data);
echo "<br>";
$data -> setTime(5,12,10);
print_r($data);

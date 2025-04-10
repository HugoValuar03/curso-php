<?php
/**
 * Datas que foram criadas com o objeto de DateTime podem ser comparadas utilizando os operadores de comparação
 * Operadores como >, < ou ==
 * Exemplo:
 *  $dataA > $dataB
 */

    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataB -> setDate(2002, 12, 10);

    if($dataB <= $dataA) {
        echo "Data B é menor ou igual a Data A";
    } else {
        echo "Data A é maior";
    }
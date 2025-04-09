<!--
- Com a função shuffle podemos reorganizar os itens em ordem aleatória;
- Passamos apenas o array como parâmetro;
- Temos um array retornado em ordem aleatória;
-->

<?php
    $arr = range(1, 20);

    shuffle($arr);

    print_r($arr);
    echo "<br>";
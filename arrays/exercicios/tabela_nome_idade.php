<!--
- Crie um array associativo com nomes e idades;
- Imprima estes dados em uma tabela de HTML;
- Dica: utilize as tags do elemento table;
-->

<?php
    $pessoas = [
        "Matheus" => 29,
        "Aléxia" => 25,
        "Hugo" => 24,
        "João" => 43
    ];
?>

<table>
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nome => $idade): ?>
    <tr>
        <td><?= $nome; ?></td>
        <td><?= $idade; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

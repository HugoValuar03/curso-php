<?php
    /**
     * O <?= $nome ?> é usado para exibir o valor da variável $nome dentro do HTML.
     * */  
    $nome = "Hugo";
?>
<form action="">
    <div>
        <input type="text" value="<?= $nome ?>">
    </div>
    <div>
        <input type="submit">
    </div>
</form>
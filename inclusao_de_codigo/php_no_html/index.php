<!-- 
    - Esta é uma das principais funcionalidades PHP;
    - Podemos inserir código dinâmico entre nossas tags HTML;
    - As extensões para esse tipo de arquivo pode mser de .php ou .phtml;
-->

<?php
    include_once "backend.php";
?>

<h1>Seja bem-vindo ao nosso site</h1>
<p><?= $nome; ?> Veja as nossas ofertas</p>

<h2>Confira nosso principais produtos:</h2>
<ul>
    <?php foreach ($produtos as $produto): ?>
    <li><?= $produto; ?></li>
    <?php endforeach; ?>
</ul>



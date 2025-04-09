<!-- 
- Crie um array com os seguintes valores: jaguar, 3.0, azul, 18, Teto solar, automático;
- Chame este array de carro;
- Crie variáveis com base neste array 
-->

<?php
    $carro = ["jaguar", 3.0, "azul", 18, "Teto solar","automático"];

    list($nomeCarro, $tipoMotor, $corCarro, $aro, $diferencial, $tipoDeCambio) = $carro;

    echo "O $nomeCarro tem um moto $tipoMotor, o carro é na cor $corCarro, tem rodas tamanho aro $aro, o diferencial é que ele tem $diferencial e o tipo de câmbio dele é $tipoDeCambio";

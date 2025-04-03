<?php
    class Pessoa{ //Molde de objeto
        function falar(){
            echo "Olá pessoal!";
        }
    } 

    $matheus = new Pessoa();

    echo $matheus->falar();
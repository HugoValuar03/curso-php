<?php

    class User{
        private $nome;
        private $idade;

        function  falar(){
            echo "Olá eu sou o objeto";
        }
    }

    $matheus = new User;
    $pedro = new User;
    $maria = new User;

    $matheus->falar();



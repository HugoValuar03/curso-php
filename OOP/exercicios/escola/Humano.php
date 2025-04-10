<?php

namespace exercicios\escola;

class Humano
{
    private $nome;
    private $idade;

    function setNome($nome){
        $this->nome = $nome;
    }
    function getNome(){
        return $this->nome;
    }

    function setIdade($idade){
        $this->idade = $idade;
    }

    function getIdade(){
        return $this->idade;
    }

    function falar(){
        echo "Meu nome é $this->nome";
    }
}
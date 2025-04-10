<?php
/*
 * class_exists() => Verifica se uma classe existe;
 * get_class_methods() => Verifica os métodos de uma classe;
 * get_class_vars() => mapeamento das propriedades de uma classe;
 * */

namespace verificando_classes;

    class Humano{
        public $idade;
        public $nome;
        public $profissao;
    }

    if(class_exists("verificando_classes\Humano")){
        echo "A classe existe";
    }

    print_r(get_class_vars("verificando_classes\Humano"));

    print_r(get_class_methods("verificando_classes\Humano"));
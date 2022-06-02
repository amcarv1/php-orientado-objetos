<?php

    class Pessoa {
        public $idade;
        public $profissao;
    }

    if (class_exists('Pessoa')) {
        echo "Existe a classe Pessoa";
    }

    if (class_exists('Cachorro')) {
        echo "Existe a classe Pessoa";
    }

    print_r(get_class_vars('Pessoa'));
    print_r(get_class_methods('Pessoa'));
<?php

    $pessoa = new class() {

        public $nome = 'joão';
        public $idade = 23;

        public function correr() 
        {
            echo "correndo";
        }

    };

    echo "oi" . $pessoa->nome;
    $pessoa->correr();
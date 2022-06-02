<?php

    abstract class Teste {
        
        public static function testandoClasse()
        {
            echo "Esse método é de uma classe abastrata.";
        }

        abstract public function testeAbs();

    }

//    $t = new Teste; Não pode instânciar classes abstratas

    Teste::testandoClasse();

    class Nova extends Teste {

        public function testeAbs() {
            echo "Teste método abstrato.";
        }

    }
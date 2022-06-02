<?php

    trait Objeto {

        public function teste() {
            // código...
        }

    }

    class Humano {

        use Objeto;

    }

    $p01 = new Humano;
    $p01->teste();


?>
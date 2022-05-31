<?php

    class Carro {

        public $marca;
        public $cor;
        public $rodas;
        public $vel_maxima;

        function setVelocidadeMaxima($novaVelocidadeMaxima) {
            $this->vel_maxima = $novaVelocidadeMaxima;
            return $this->vel_maxima;
        }

        function getVelocidadeMaxima() {
            echo "$this->vel_maxima" . "<br>";
        }

    }

    $c01 = new Carro;
    $c01->setVelocidadeMaxima(100);
    $c01->getVelocidadeMaxima();
    $c01->setVelocidadeMaxima(3);
    $c01->getVelocidadeMaxima();

?>
<?php

    class Carro {
        
        public $rodas = 4;
        private $pelicula = true;

        public function getPeliculca() {
            if (!($this->pelicula)) {
                echo "false";
            } else {
                echo "true";
            }
            
        }


    }

    class Mecanico {

        public function alterarRodas($carro, $rodasNovas) {
            $rodasAntigas = $carro->rodas;
            $carro->rodas = $rodasNovas;
            echo "<br>O mecânico mudou as rodas. <br> Antes $rodasAntigas || Agora $carro->rodas";
        }

        public function colocarPelicula($carro) {
            $carro->pelicula = true;
            echo "<br>O mecânico colocou películas <br>";
        }

    }

    $c01 = new Carro;   
    echo $c01->rodas . "<br>";
    echo $c01->getPeliculca();

    
?>
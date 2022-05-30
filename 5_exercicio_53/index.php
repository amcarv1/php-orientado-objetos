<?php

    class Cachorro {

        function latir() {
            echo "au au au. <br>";
        }

        function andar() {
            echo "estou andando. <br>";
        }

    }

    $bulldog = new Cachorro;
    $pitbull = new Cachorro;

    $bulldog->latir();
    $pitbull->andar();

?>
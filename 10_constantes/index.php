<?php

    class Humano {

        public const CABECA = 1;
        public const OLHOS = 2;

        function mostraCabeca() {
            echo "Quantidade de cabeças " . self::CABECA;
        }

    }

    $p01 = new Humano;
    echo $p01::CABECA;

    $p01->mostraCabeca();
?>
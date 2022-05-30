<?php

    class Pessoa {

        function falar() {
            echo "Oi, eu estou falando. <br>";
        }

        function somar($x, $y) {
            echo $x + $y;
        }

    }

    $joao = new Pessoa();
    $joao->falar();
    $joao->somar(5, 10);
    
?>
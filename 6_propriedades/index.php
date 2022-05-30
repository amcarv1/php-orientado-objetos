<?php

    class Carro {

        public $portas = 4;
        public $rodas = 4;
        public $cor = "Vermelho";

    }

    $ferrari = new Carro;

    echo $ferrari->portas . "<br>";
    echo $ferrari->rodas . "<br>";
    echo $ferrari->cor . "<br>";
    
    $ferrari->cor = "Amarelo";
    echo $ferrari->cor;

?>
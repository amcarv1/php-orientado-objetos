<?php

    class Pessoa {

        public $nome;
        public $idade;

        function andar() {
            echo "Estou andando. <br>";
        }

    }

    $p01 = new Pessoa;
    $p01->nome = "Joãozinho";
    $p01->idade = 40;

    $p02 = new Pessoa;
    $p02->nome = "Pereirinha";
    $p02->idade = 21;

    echo "Temos o $p01->nome e o $p02->nome, ambos respectivamente com $p01->idade anos e $p02->idade anos.";

?>
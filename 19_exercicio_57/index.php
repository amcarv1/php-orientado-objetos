<?php

    class Cachorro {
        private $nome;
        private $raca;

        public function __construct(string $nome, string $raca)
        {
            $this->nome = $nome;
            $this->raca = $raca;
        }

        public function getDados()
        {
            echo "Nome: " . $this->nome;
            echo "Raça: " . $this->raca;
        }
    }
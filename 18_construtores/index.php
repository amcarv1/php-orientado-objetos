<?php

class Carro {

    private $portas;
    private $cor;
    private $marca;

    public function __constructor(string $portas, string $cor, string $marca)
    {
        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;
    }

}

$ferrari = new Carro(4, "Vermelho", "Ferrari");
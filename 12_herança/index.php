<?php

    class Humano {

        public $idade = 30;

        public function falar() {
            echo "Olá, Mundo! <br>";
        }

        private function gritar() {
            echo "PHP é muito bom ! <br>";
        }

        public function getGritar() {
            $this->gritar();
        }

        protected function andar() {
            echo "andaaaaando ... toc toc toc <br>";
        }

        public function getAndar() {
            $this->andar();
        }

    }

    /* -=-=-=-=-=-=-=-=-=- */
    $p01 = new Humano;
    $p01->falar();
    $p01->getGritar();
    $p01->getAndar();
    /* -=-=-=-=-=-=-=-=-=- */


    // Classe 02 que herda propriedades e métodos da classe Humano.
    class Programador extends Humano {

        public function getAndarHumano() {
            $this->andar();
        }

        public function getGritarHumano() {     // Esse método não vai funcionar.
            $this->gritar();                    // Motivo: o método gritar() está com a visibilidade private.
        }                               
    }

    /* -=-=-=-=-=-=-=-=-=- */
    $prog01 = new Programador;
    $prog01->falar();
    $prog01->getGritar();
    $prog01->getAndar();
    $prog01->getAndarHumano();
    $prog01->getGritarHumano();
    /* -=-=-=-=-=-=-=-=-=- */
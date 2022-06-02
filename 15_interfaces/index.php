<?php

    interface Animal {

        public function andar();
        public function falar();
        public function comer();

    }

    class Humano implements Animal {

        public function andar() {
            echo "Andando...";
        }

        public function falar() {
            echo "Falando...";
        }

        public function comer() {
            echo "Comendo...";
        }

    }
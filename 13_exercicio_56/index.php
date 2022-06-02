<?php

    class Humano {

        public $nome;
        public $idade;

        public function falar() {
            echo "$this->nome está falando.";
        }

        public function getCaracteristicas() {
            echo "Nome = $this->nome <br>";
            echo "Idade = $this->idade <br>";
        }

    }

    class Professor extends Humano {

        public $disciplina;
        public $darAulaDireito;
        
        public function estaDandoAula() {
            echo "$this->nome está dando aula de $this->disciplina";
        }

        public function getCaracteristicasProfessor() {
            $this->getCaracteristicas();
            echo "Disciplina = $this->disciplina <br>";
        }

    }

    $hum01 = new Humano;
    $hum01->nome = "João";
    $hum01->idade = 32;
    $hum01->getCaracteristicas();

    $prof01 = new Professor;
    $prof01->nome = "Pedro";
    $prof01->idade = 26;
    $prof01->disciplina = "Física";
    $prof01->getCaracteristicasProfessor();

?>
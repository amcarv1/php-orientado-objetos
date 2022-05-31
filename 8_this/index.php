<?php

    class Animal {

        public $nome = "{ vazio }";

        function modificaNome($novoNome) {
            $this->nome = $novoNome;
        }

        function andar() {
            return "$this->nome está andando.";
        }

        function andarRapido() {
            return $this->andar() . " rápido!". "<br>";
        }

    }

    $a01 = new Animal;
    echo "O nome do animal é $a01->nome !" . "<br>";

    $a01->modificaNome("Rex");
    echo "O nome do animal é $a01->nome !" . "<br>";

    echo $a01->andar();
    echo $a01->andarRapido();
?>


<?php   

    class Humano {}
    class Professor extends Humano{}
    class Carro {}

    $obj01 = new Humano;

    if ($obj01 instanceof Humano) {
        echo "obj01 é Humano <br>";
    }   else {
        echo "obj01 não é Humano <br>";
    }

    $obj02 = new Professor;

    if ($obj02 instanceof Humano) {
        echo "obj02 é Humano <br>";
    }   else {
        echo "obj02 não é Humano <br>";
    }

    $obj03 = new Carro;

    if ($obj03 instanceof Humano) {
        echo "obj03 é Humano <br>";
    }   else {
        echo "obj03 não é Humano <br>";
    }

?>
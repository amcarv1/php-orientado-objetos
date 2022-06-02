<?php

    class Humano {}
    
    $p01 = new Humano;

    if (is_object($p01)) {
        echo "É objeto";
    }

    echo get_class($p01);

    if (method_exists($p01, "falar")) {
        echo "método existe";
    }

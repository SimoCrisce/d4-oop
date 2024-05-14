<?php

include_once __DIR__ . "/MaterialeBibliotecario.php";

class Libro extends MaterialeBibliotecario
{
    public $autore;

    function __construct($autore) {
        $this->autore = $autore;
        self::$contatoreMateriali++;
    }
    static public function contaLibri() {
        echo self::$contatoreMateriali;
    }
}


<?php

include_once __DIR__ . "/MaterialeBibliotecario.php";

class DVD extends MaterialeBibliotecario
{
    public $regista;

    function __construct($regista) {
        $this->regista = $regista;
        self::$contatoreMateriali++;
    }
    static public function contaDVD() {
        echo parent::$contatoreMateriali;
    }
}

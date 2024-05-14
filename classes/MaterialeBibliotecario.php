<?php

include_once __DIR__ . "/../interfaces/Prestito.php";

abstract class MaterialeBibliotecario implements Prestito
{
    public static $contatoreMateriali = 0;
    public $titolo;
    public $annoPubblicazione;

    function __construct($titolo, $annoPubblicazione) {
        $this->titolo = $titolo;
        $this->annoPubblicazione = $annoPubblicazione;
        self::$contatoreMateriali++;
    }

    function presta() {
        self::$contatoreMateriali--;
    }

    function restituisci() {
        self::$contatoreMateriali++;
    }
}


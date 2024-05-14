<?php

include_once __DIR__ . "/classes/DVD.php";
include_once __DIR__ . "/classes/Libro.php";
include_once __DIR__ . "/classes/MaterialeBibliotecario.php";

$dvd = new DVD("Eminem");
$libro = new Libro("Giacomo Leopardi");
$libro1 = new Libro("Andrea Camilleri");
$libro2 = new Libro("Luigi Pirandello");
$libro3 = new Libro("Giovanni Verga");
$libro4 = new Libro("Giovanni Pascoli");

echo MaterialeBibliotecario::$contatoreMateriali;
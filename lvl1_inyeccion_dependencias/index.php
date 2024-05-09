<?php 
require_once "principalClass_persona.php";
require_once "class_cartera.php";
require_once "class_targetaMetro.php";
require_once "class_telefono.php";

$cartera = new MiCartera();
$targetaMetro = new MiTagretaMetro();
$telefono = new MiTelefono();

// Creamos la instancia de la clase principal e inyectamos las dependencias
$miguel = new Persona($cartera, $targetametro, $telefono);

// Salimos de casa
$miguel->prepararseParaSalir();
?>
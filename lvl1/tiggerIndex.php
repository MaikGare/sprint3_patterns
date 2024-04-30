<?php 

require_once "tiggerClass.php";

$tigger = Tigger::getInstance();
$tigger->roar();
$tigger->roar();
$tigger->getCounter();

$otroTigger = Tigger::getInstance();
$otroTigger->roar();
$otroTigger->getCounter();
?>
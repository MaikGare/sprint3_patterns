<?php 

class Tigger {

private static $instance;
private int $roarsQuantity = 0;

private function __construct(){
    echo "Building Charcter..." . "<br>";
}

public static function getInstance(){
    if (self::$instance === null){
        self::$instance = new Tigger;
    }
    return self::$instance;
}

public function roar(){
    echo "Grrrrr!!!" . "<br>";
    $this->roarsQuantity++;
}

public function getCounter(){
    echo "Tigger ha rugido " . $this->roarsQuantity . " veces" . "<br>";
}
}


?>
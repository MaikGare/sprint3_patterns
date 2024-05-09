<?php 

class Persona {
    private $cartera;
    private $targetaMetro;
    private $telefono;

    
    public function __construct(MiCartera $cartera, MiTagretaMetro $targetaMetro, MiTelefono $telefono) {
        $this->cartera = $cartera;
        $this->targetaMetro = $targetaMetro;
        $this->telefono = $telefono;
    }

    public function prepararseParaSalir() {
        
        $this->cartera->llevar();
        $this->targetaMetro->llevar();
        $this->telefono->llevar();
    }
}


?>
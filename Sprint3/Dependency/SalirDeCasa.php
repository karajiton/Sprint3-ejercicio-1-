<?php
require_once 'Escenciales.php';

class SalirDeCasa{
    private $escenciales;

    public function __construct(Escenciales $escenciales) {
        $this->escenciales = $escenciales;
    }
}
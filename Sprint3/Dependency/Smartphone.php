<?php
class Smartphone{
    private String $Smartphone;
    public function __construct($smartphone) {
        $this->smartphone = $smartphone;
    }
    public function mostrarMensaje():void{
        echo 'Tienes el telefono';
    }
}
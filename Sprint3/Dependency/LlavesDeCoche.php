<?php
class LlavesDeCoche{
    private bool $llavesCoche;
    public function __construct($llavesCoche) {
        $this->llavesCoche = $llavesCoche;
    }
    public function mostrarMensaje():void{
        echo 'Tienes las llaves del coche';
    }
}
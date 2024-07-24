<?php
class LlavesDeCasa{
    private string $llavesCasa;
    public function __construct($llavesCasa) {
        $this->llavesCasa = $llavesCasa;
    }
    public function mostrarMensaje():void{
        echo 'Tienes las llaves de casa';
    }
}
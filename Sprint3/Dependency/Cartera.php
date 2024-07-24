<?php
Class Cartera{
    private string $cartera;
   
    public function __construct($cartera) {
        $this->cartera = $cartera;
     
    }
    public function mostrarMensaje():void{
        echo 'Tienes la cartera';
    }
}


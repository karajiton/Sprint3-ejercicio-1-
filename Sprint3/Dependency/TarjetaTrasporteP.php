<?php
class TarjetaTrasporteP{
    private bool $tarjetaTrasporteP;
    public function __construct($tarjetaTrasporteP) {
        $this->tarjetaTrasporteP = $tarjetaTrasporteP;
    }
    public function mostrarMensaje():void{
        echo 'Tienes la tarjeta del bus';
    }
}
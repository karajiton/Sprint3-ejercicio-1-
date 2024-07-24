<?php
require_once 'Cartera.php';
require_once 'Smartphone.php';
require_once 'LlavesDeCoche.php';
require_once 'LlavesDeCasa.php';
require_once 'TarjetaTrasporteP.php';

class SalirDeCasa{
    private array $escenciales;
    private $cartera;
    private $smartphone;
    private $llavesDecoche;
    private $llavesDeCasa;
    private $tarjetaTrasporteP;
    public function __construct(Cartera $cartera,Smartphone $smartphone,LlavesDeCoche $llavesDecoche,LlavesDeCasa $llavesDeCasa,TarjetaTrasporteP $tarjetaTrasporteP) {
        $this->escenciales = [$cartera,$smartphone,$llavesDecoche,$llavesDeCasa,$tarjetaTrasporteP];
    }
    public function mostrarMensaje(){
        echo 'tienes todo, puedes salir';
    }
}
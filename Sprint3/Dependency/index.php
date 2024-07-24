<?php
require_once 'SalirDeCasa.php';

$cartera = new Cartera('Nike');
$smartphone = new Smartphone('Iphone20');
$llavesDeCoche = new LlavesDeCoche(false);
$llavesDeCasa = new LlavesDeCasa('llaves de casa');
$tarejetaTrasporteP = new TarjetaTrasporteP(true);
$salirDeCasa = new SalirDeCasa($cartera,$smartphone,$llavesDeCoche,$llavesDeCasa,$tarejetaTrasporteP);

$cartera->mostrarMensaje(); 
echo PHP_EOL;
$smartphone->mostrarMensaje(); 
echo PHP_EOL;
$llavesDeCoche->mostrarMensaje();
echo PHP_EOL;
$llavesDeCasa->mostrarMensaje(); 
echo PHP_EOL;
$tarejetaTrasporteP->mostrarMensaje(); 
echo PHP_EOL;
$salirDeCasa->mostrarMensaje(); 

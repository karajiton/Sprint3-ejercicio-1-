<?php
require_once 'SalirDeCasa.php';

$escenciales = new Escenciales('cartera','llaves de mi casa',false,true,'huawei');
$salirDeCasa = new SalirDeCasa($escenciales);

print_r ($salirDeCasa);
<?php
require_once 'Tigger.php';

$tigger = Tigger::getInstance();
$tigger->roar();
echo 'el tigger ha rugido ' .$tigger->getCounter(). 'veces';
$tigger->roar();
$tigger2 = Tigger::getInstance();
$tigger2->roar();
echo 'el tigger ha rugido ' .$tigger2->getCounter(). 'veces';

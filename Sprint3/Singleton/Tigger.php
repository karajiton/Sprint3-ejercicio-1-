<?php
class Tigger {
    private static $instance = null;
    private static  int $counter = 0;
    private function __construct() {
            echo "Building character..." . PHP_EOL;
    }

    public function roar() {
            echo "Grrr!" . PHP_EOL;
            self::$counter++;
    }
    public static function getInstance(): Tigger
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }
    private function __clone() { }
   
    public function getCounter(){
        return self::$counter;

       }
}

<?php
Class Escenciales{
    private string $cartera;
    private string $llavesCasa;
    private bool $llavesCoche;
    private bool $tarjeTrasportePublico;
    private string $smartphone;
    public function __construct($cartera,$llavesCasa,$llavesCoche,$tarjeTrasportePublico,$smartphone) {
        $this->cartera = $cartera;
        $this->llavesCasa = $llavesCasa;
        $this->llavesCoche = $llavesCoche;
        $this->tarjeTrasportePublico = $tarjeTrasportePublico;
        $this->smartphone = $smartphone;
    }
}

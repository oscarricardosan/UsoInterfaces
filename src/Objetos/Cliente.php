<?php

namespace UsoInterfaces\Objetos;

use UsoInterfaces\Interfaces\ClienteInterface;

class Cliente implements ClienteInterface{

    public $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function cargarNombre($nombre)
    {
        $this->nombre = trim($nombre);
    }
}

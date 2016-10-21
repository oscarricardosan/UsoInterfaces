<?php

namespace UsoInterfaces\Objetos;

use UsoInterfaces\Interfaces\CalculadoraInterface;
use UsoInterfaces\Interfaces\ClienteInterface;

class PrecioPapa{

    protected $cantidad;
    protected $calculadora;
    protected $valor;
    protected $cliente;

    public function __construct($cantidad, $valor, CalculadoraInterface $calculadora, ClienteInterface $cliente)
    {
        $this->cantidad = $cantidad;
        $this->calculadora = $calculadora;
        $this->valor = $valor;
        $this->cliente = $cliente;
    }

    public function obtenerValor()
    {
        return $this->calculadora->multiplicar($this->cantidad, $this->valor);
    }

    public function getCliente()
    {
        return $this->cliente;
    }
}
<?php

namespace Uso_interfacesOscarricardosan\Objetos\Calculadoras;

use Uso_interfacesOscarricardosan\Interfaces\CalculadoraInterface;

abstract class CalculadoraBase implements CalculadoraInterface
{
    abstract public function renderMensaje($resultado);


    public function sumar($numero1, $numero2)
    {
        return $this->renderMensaje($numero1 + $numero2);
    }

    public function multiplicar($numero1, $numero2)
    {
        return $this->renderMensaje($numero1 * $numero2);
    }
}
<?php

namespace UsoInterfaces\Objetos\Calculadoras;

class CalculadoraBasica extends CalculadoraBase
{
    public function renderMensaje($resultadoOperacion){
        return "El resultado es => $resultadoOperacion";
    }
}
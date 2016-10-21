<?php

namespace UsoInterfaces\Objetos\Calculadoras;

class CalculadoraBasicaHtm extends CalculadoraBase
{

    public function renderMensaje($resultadoOperacion)
    {
        return "<b>El resultado es</b> => $resultadoOperacion <----";
    }
}
<?php

namespace UsoInterfaces\Objetos\Calculadoras;

class CalculadoraBasicaHtml extends CalculadoraBase
{

    public function renderMensaje($resultadoOperacion)
    {
        return "<b>El resultado es</b> => $resultadoOperacion <----";
    }
}
<?php

require __DIR__ . '/vendor/autoload.php';

use Uso_interfacesOscarricardosan\Objetos\Calculadoras\CalculadoraBasica;
use Uso_interfacesOscarricardosan\Objetos\Calculadoras\CalculadoraBasicaHtm;
use Uso_interfacesOscarricardosan\Objetos\Cliente;
use Uso_interfacesOscarricardosan\Objetos\PrecioPapa;

$clienteAntonio = new Cliente('ANtonio');
$calculadoraBasica = new CalculadoraBasica();
$precioPapaBlanca = new PrecioPapa(10, 200, $calculadoraBasica, $clienteAntonio);
echo $precioPapaBlanca->obtenerValor().'<br>';
echo $precioPapaBlanca->getCliente()->obtenerNombre();
echo '<hr>';

$clienteOscar = new Cliente('Oscar');
$calculadoraHtml = new CalculadoraBasicaHtm();
$precioPapaTocarreña = new PrecioPapa(100, 200, $calculadoraHtml, $clienteOscar);
echo $precioPapaTocarreña->obtenerValor().'<br>';
echo $precioPapaTocarreña->getCliente()->obtenerNombre();
echo '<hr>';


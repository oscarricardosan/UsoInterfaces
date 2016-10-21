<?php

require __DIR__ . '/vendor/autoload.php';

use UsoInterfaces\Objetos\Calculadoras\CalculadoraBasica;
use UsoInterfaces\Objetos\Calculadoras\CalculadoraBasicaHtml;
use UsoInterfaces\Objetos\Cliente;
use UsoInterfaces\Objetos\PrecioPapa;

$clienteAntonio = new Cliente('ANtonio');
$calculadoraBasica = new CalculadoraBasica();
$precioPapaBlanca = new PrecioPapa(10, 200, $calculadoraBasica, $clienteAntonio);
echo $precioPapaBlanca->obtenerValor().'<br>';
echo $precioPapaBlanca->getCliente()->obtenerNombre();
echo '<hr>';

$clienteOscar = new Cliente('Oscar');
$calculadoraHtml = new CalculadoraBasicaHtml();
$precioPapaTocarreña = new PrecioPapa(100, 200, $calculadoraHtml, $clienteOscar);
echo $precioPapaTocarreña->obtenerValor().'<br>';
echo $precioPapaTocarreña->getCliente()->obtenerNombre();
echo '<hr>';


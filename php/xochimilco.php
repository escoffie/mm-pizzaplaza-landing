<?php

require_once 'config.php';

$sucursal = [
    'name' => 'Xochimilco',
    'whatsapp' => '5219991639683',
    'telefonos' => [
        '5552 5256',
        '5653 7701',
        '5653 7715',
        '5653 7788',
    ],
    'direccion' => 'Tierra y Libertad 69
    Entrada por Prol. Div. del Norte. Salida por Tierra y Libertad
    San Lorenzo La Cebada
    Delegación Xochimilco
    México CDMX',
    'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.1158232633784!2d-99.124390284614!3d19.277328750621493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce016ce631b757%3A0x8e5aa7c8089180cc!2sPizzas+Plaza!5e0!3m2!1ses!2smx!4v1541622132304'
];

echo $twig->render('home.html', compact('general', 'sucursal'));

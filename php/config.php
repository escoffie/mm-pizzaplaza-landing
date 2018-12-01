<?php

require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./views');

$twig = new Twig_Environment( $loader, []);

$general = [
    'brand' => 'Pizzas Plaza',
    'title' => 'Pizzas Plaza',
    'phonePrefix' => '52 1 55',
    'years' => (date('Y')-1978),
    'thisYear' => date('Y'),
    'domain' => 'http://docker.local/'
];

$menu = json_decode(file_get_contents('menu.json'), true);

$sucursales = json_decode(file_get_contents('sucursales.json'), true);

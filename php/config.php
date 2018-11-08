<?php

require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./views');

$twig = new Twig_Environment( $loader, []);

$general = [
    'brand' => 'Pizzas Plaza',
    'title' => 'Pizzas Plaza',
    'phonePrefix' => '+52 1 55'
];

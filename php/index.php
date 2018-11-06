<?php

require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./views');

$twig = new Twig_Environment( $loader, []);

$params = [
    'title' => 'Pizzas Plaza'
];

echo $twig->render('home.html', $params);

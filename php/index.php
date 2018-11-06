<?php

require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./views');

$twig = new Twig_Environment( $loader, []);

$params = [
    'brand' => 'Pizzas Plaza',
    'title' => 'Pizzas Plaza',
    'whatsapp' => 'https://api.whatsapp.com/send?phone=5219991639683'
];

echo $twig->render('home.html', $params);

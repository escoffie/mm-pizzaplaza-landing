<?php

require_once 'config.php';

$sucursal = $sucursales[2];

echo $twig->render('home.html', compact('general', 'sucursal', 'menu', 'sucursales'));

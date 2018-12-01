<?php

require_once 'config.php';

$sucursal = $sucursales[3];

echo $twig->render('home.html', compact('general', 'sucursal', 'menu', 'sucursales'));

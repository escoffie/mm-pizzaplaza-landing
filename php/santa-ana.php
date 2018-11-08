<?php

require_once 'config.php';

$sucursal = $sucursales[7];

echo $twig->render('home.html', compact('general', 'sucursal', 'menu', 'sucursales'));

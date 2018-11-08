<?php

require_once 'config.php';

$sucursal = $sucursales[4];

echo $twig->render('home.html', compact('general', 'sucursal', 'menu', 'sucursales'));

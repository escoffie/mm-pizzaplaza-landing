<?php

require_once 'config.php';

echo $twig->render('sucursales.html', compact('general', 'sucursales'));

<?php

chdir(dirname(__DIR__));

define('DS', DIRECTORY_SEPARATOR);
define('PATHS', [
    'CORE' => dirname(__DIR__) . DS . 'core' . DS,
    'APP' => dirname(__DIR__) . DS . 'app' . DS
]);


require_once PATHS['CORE'] . 'Autoloader.php';
new Autoloader;

$app = new App;

<?php

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Controller
{
    public function twigView()
    {
        $loader = new FilesystemLoader(PATHS['APP'] . 'views');
        return new Environment($loader, ['debug' => true]);
    }
}

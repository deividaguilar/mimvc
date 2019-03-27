<?php

class Autoloader
{
    public function __construct()
    {
        $this->loadVendor();
        $this->loadAppClasess();
        $this->loadDataBase();
    }

    private function loadAppClasess()
    {
        spl_autoload_register(function ($className) {
            require_once preg_replace("/\\\\/", DS, $className) . ".php";
        });
    }

    private function loadVendor()
    {
        require_once 'vendor' . DS . 'autoload.php';
    }

    private function loadDataBase()
    {
        require_once 'database.php';
    }
}

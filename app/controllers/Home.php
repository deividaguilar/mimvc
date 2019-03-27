<?php

namespace App\controllers;

use \Controller;
use app\models\User;

class Home extends Controller
{
    protected $user;
    protected $twig;

    public function __construct()
    {
        $this->user = new User();
        $this->twig = $this->twigView();
    }

    public function index()
    {
        $data['records'] = $this->user->get();
        $response = $this->twig->render('Home/index.twig', $data);
        echo $response;
        return $response;
    }
}

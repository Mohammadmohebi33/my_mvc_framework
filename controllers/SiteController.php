<?php

namespace Mohammad\MvcProject\controllers;

use Mohammad\MvcProject\core\Controller;
use Mohammad\MvcProject\core\Request;

class SiteController extends Controller
{
    public function home()
    {
        echo $this->render('home', [
            'name' => 'TheCodeholic'
        ]);
    }

    public function login()
    {
        $this->setLayout('auth');
        echo $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->getMethod() === 'post') {
            echo '<pre>';
            var_dump($request->getBody());
            echo '</pre>';
            exit;
        }
        $this->setLayout('auth');
        echo $this->render('register');
    }

    public function contact()
    {
        echo $this->render('contact');
    }
}
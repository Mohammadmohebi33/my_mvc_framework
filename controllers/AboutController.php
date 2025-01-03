<?php

namespace Mohammad\MvcProject\controllers;

use Mohammad\MvcProject\core\Controller;

class AboutController extends Controller
{
    public function index()
    {
       echo $this->render('about');
    }
}
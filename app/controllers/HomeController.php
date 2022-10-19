<?php

namespace MVC\controllers;

use MVC\core\controller;

class HomeController extends controller {
    public function index(){
        $title='home index';

        $this->view("home/index",['title'=>$title]);
    }
    public function add(){
        echo "add your line ";
    }
}
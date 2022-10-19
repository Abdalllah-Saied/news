<?php

namespace MVC\controllers;

use MVC\core\controller;

class HomeController extends controller {
    public function index(){
        $users=$this->db()->rows("SELECT * FROM users");
        $title='home index';
        $this->view("home/index",['title'=>$title,'users'=>$users]);
    }
    public function add(){
        echo "add your line ";
    }
}
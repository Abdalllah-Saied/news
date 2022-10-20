<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\User;

class HomeController extends controller {
    public function index(){
        $user=new User();
        $users=$user->gerAllUsers();
        $title='home index';
        $this->view("home/index",['title'=>$title,'users'=>$users]);
    }
    public function add(){
        echo "add your line ";
    }
}
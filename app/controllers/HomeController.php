<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\User;
use GUMP;


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
    public function login(){

        $title='Log In';
        $this->view("home/login",['title'=>$title]);
    }
    public function postLogin(){
        //to validate data we use GUMP FROM GITHUB
        $is_valid = GUMP::is_valid($_POST, [
            'email'=> 'required'

        ]);
        echo '<pre>';
        print_r($is_valid);
    }
}
<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\Helpers;
use MVC\core\Session;
use MVC\models\User;
use GUMP;



class HomeController extends controller {
    public function __construct()
    {
        Session::Start();
    }

    public function index(){
        $user=new User();
        $users=$user->gerAllUsers();
        $title='home'; 
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
        if ($is_valid == 1){
            $user=new User();
            $user_data=$user->getUser($_POST['email'],$_POST['password']);
            var_dump($user_data);
            Session::Set('user',$user_data);
            Helpers::redirect('user/index');
        }
    }
    public function details(){
        $title='Details';
        $this->view("home/details",['title'=>$title]);
    }
    public function logout(){
        Session::Stop();
    }
}
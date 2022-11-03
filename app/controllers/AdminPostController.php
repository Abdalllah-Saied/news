<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\Session;

class AdminPostController extends controller
{
    public function __construct()
    {
        Session::Start();
        $user_data=Session::Get('user');
        if(empty($user_data)){
            echo'class not access';
            die;
        }
    }
    public function index(){
        $this->view('back/article',['title'=>'admin']);
    }


}
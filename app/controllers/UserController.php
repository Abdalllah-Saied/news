<?php

namespace MVC\controllers;

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\Session;
use MVC\models\User;
use GUMP;

class UserController extends controller
{
    public function __construct()
    {
        Session::Start();
        $user_data=Session::Get('user');
        if(empty($user_data)){
            echo "access not allowed";die;
        }
    }
    public function index(){
        echo "user controller";
    }
}
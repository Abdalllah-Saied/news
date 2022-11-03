<?php

namespace MVC\controllers;

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\Helpers;
use MVC\core\Session;
use MVC\models\User;
use GUMP;

class UserController extends controller
{
    public function __construct()
    {
        Session::Start();
    }
    public function index(){
        echo "user controller";
    }
    public function login (){
        echo'test';
        $this->view('home/login',['title'=>'Login']);
    }
    public function postLogin(){
        $v=GUMP::is_valid($_POST,['email'=>'required']);
        if ($v==1){
            $user=new User();
            $data=$user->getUser($_POST['email'],$_POST['password']);
            Session::Set('user',$data);
            helpers::redirect('adminpost/index');
        }
    }
}
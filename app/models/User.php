<?php
namespace MVC\models;
use MVC\core\model;

class User extends model
{
    public function gerAllUsers(){
        $users = model::db()->rows("SELECT * FROM users");
        return $users;
    }
    public function getUser($email, $password){
        $user=model::db()->rows("SELECT * FROM users WHERE `email`= ? && `password`= ?",[$email,$password]);
        return $user;
    }
}
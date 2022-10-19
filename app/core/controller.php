<?php
namespace MVC\core;
use Dcblogdev\PdoWrapper\Database as Database;

class controller{
    public function view($path,$pram){
        extract($pram);
        require_once (VIEW.DS.$path.".PHP");
    }
    public function db(){
        // make a connection to mysql here
        $options = [
            //required
            'username' => 'root',
            'database' => 'mvc_system',
            //optional
            'password' => '',
            'type' => 'mysql',
            'charset' => 'utf8',
            'host' => 'localhost',
            'port' => '3306'
        ];
        return $db = new Database($options);
    }
}
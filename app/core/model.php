<?php
namespace MVC\core;
use Dcblogdev\PdoWrapper\Database as Database;

class model{
    static function db(){
        // make a connection to mysql here
        $options = [
            //required
            'username' => USERNAME,
            'database' => DATABASE_NAME,
            //optional
            'password' => PASSWORD,
            'type' => DATABASE_TYPE,
            'charset' => 'utf8',
            'host' => SERVER,
            'port' => '3306'
        ];
        return $db = new Database($options);
    }
}

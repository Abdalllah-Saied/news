<?php
namespace MVC\core;
use Dcblogdev\PdoWrapper\Database as Database;

class controller{
    public function view($path,$pram){
        extract($pram);
        require_once (VIEW.DS.$path.".php");
    }
}
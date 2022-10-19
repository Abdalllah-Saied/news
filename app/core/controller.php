<?php
namespace MVC\core;

class controller{
    public function view($path,$pram){
        extract($pram);
        require_once (VIEW.DS.$path.".PHP");
    }
}
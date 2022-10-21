<?php

namespace MVC\core;

use MVC\controllers\HomeController;
//require_once "../controllers/HomeController.php";
class App{
    private $controller;
    private $method;
    private $params;

    public function __construct(){
        $this->url();
        $this->render();
    }
    private function url(){
        if(!empty($_SERVER['QUERY_STRING'])){
            $url=explode("/",$_SERVER['QUERY_STRING']);
            $this->controller=isset($url[0]) ? $url[0]."Controller" : "HomeController";
            $this->method=isset($url[1]) ? $url[1] : "index";
            unset($url[0],$url[1]);
            $this->params=array_values($url);
        }
        else{

            $this->controller='homeController';
            $this->method='index';
            $this->params=array_values([]);
        }
    }
    private function render(){
        $controller="MVC\controllers\\".$this->controller;
        if(class_exists($controller)){
            $controller=new $controller;
            if (method_exists($controller,$this->method)){
                call_user_func_array([$controller,$this->method],$this->params);
            }else{
                echo 'method not exist';
            }
        }else{
            echo 'class not exist';
        }
    }

}
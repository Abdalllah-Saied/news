<?php

namespace MVC\core;

class app{
    private $controller;
    private $method;
    private $params;

    public function __construct(){
        //echo $_SERVER['QUERY_STRING'];
        $this->url();
        $this->render();
    }
    private function url(){
        if(!empty($_SERVER['QUERY_STRING'])){
            $url=explode("/",$_SERVER['QUERY_STRING']);
            $this->controller=isset($url[0]) ? $url[0]."controller" : "homecontroller";
            $this->method=isset($url[1]) ? $url[1] : "index";
            unset($url[0],$url[1]);
            $this->params=array_values($url);

        }
    }
    private function render(){
        $controller="MVC\controllers\\".$this->controller;
        if(class_exists($controller)){
            echo $controller;
            echo $this->method;
            if (method_exists($controller,$this->method)){
                echo $controller;
                call_user_func_array([$controller,$this->method],$this->params);
            }else{
                echo 'method not exist';
            }
        }else{
            echo 'class not exist';
        }
    }

}
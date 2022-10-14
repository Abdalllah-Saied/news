<?php
class app{
    public function __construct(){
        echo $_SERVER['QUERY_STRING'];
        $this->url();
        echo 'test';
    }
    private function url(){
        $url=explode("/",$_SERVER['QUERY_STRING']);
        print_r($url);
    }
}
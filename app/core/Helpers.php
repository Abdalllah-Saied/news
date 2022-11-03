<?php

namespace MVC\core;

class Helpers
{
    public static function redirect($path){
        header("LOCATION:".DOMAIN_NAME."/".$path);
    }
}
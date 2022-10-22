<?php
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS.'app');
define("CONFIG",APP.DS.'config');
define("CONTROLLERS",APP.DS.'controllers');
define("CORE",APP.DS.'core');
define("MODELS",APP.DS.'models');
define("VIEW",APP.DS.'views');
require_once("../vendor/autoload.php");
define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE_NAME","mvc_system");
define("DATABASE_TYPE","mysql");
define("DOMAIN_NAME","http://mvc.test/");
$app=new MVC\core\App();
<?php

define("ROOT", dirname(__DIR__));
define("PUBLIC", ROOT."/public");
define("CORE", ROOT."/core");
define("APP", ROOT."/app");
define("CONTROLLERS", APP."/controllers");
define("VIWES", APP."/viwes");
define("PATH", "http://localhost/app_17/index.php");

require CORE . '/funcs.php';

$uri = trim($_SERVER['REQUEST_URI'] , '/');

if($uri === 'app_17/index.php'){
    require CONTROLLERS . "/index.php";
}elseif($uri == 'app_17/about.php' ){
    require CONTROLLERS . "/about.php";
}else{
    require VIWES . "/errors/404.tpl.php";
    die;
}
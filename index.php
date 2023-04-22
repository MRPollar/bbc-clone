<?php

date_default_timezone_set('America/Sao_Paulo');
$autoload = function($class){
   $class = str_replace("\\","/",$class);
   include($class.".php");
};

spl_autoload_register($autoload);

$application = new Application();
$application->init();
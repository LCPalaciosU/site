<?php
session_start();

define('PORT','7788');
define('BASEPATH','/votacion/');
define('URL', 'http://127.0.0.1:'.PORT.BASEPATH);


define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd().DS);
define('APP', ROOT.'app'.DS);
define('INCLUDE', ROOT.'includes'.DS);
define('VIEWS', ROOT.'views'.DS);

define('ASSETS', URL.'assets/');
define('CSS', ASSETS.'css/');
define('CSS', ASSETS.'images/');


require_once(APP.'functions.php');



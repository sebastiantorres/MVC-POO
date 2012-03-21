<?php 

define('DS', DIRECTORY_SEPARATOR);
define('ROOT',realpath(dirname(__FILE__)).DS);
define('APP_PATHS', ROOT.'application'.DS);
require_once APP_PATHS.'Config.php';
require_once APP_PATHS.'Request.php';
require_once APP_PATHS.'Bootstrap.php';
require_once APP_PATHS.'Controller.php';
require_once APP_PATHS.'Model.php';
require_once APP_PATHS.'View.php';
require_once APP_PATHS.'Registro.php';
try{
	Bootstrap::run(new Request);
}
catch(Exception $e) {
	echo $e->getMessage();
}
 ?>
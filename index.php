<?php
$file_path =__DIR__; 
$file_path=str_replace('\\','/',$file_path);
//var_dump($file_path);
define("MAIN_PATH",$file_path);
ini_set('display_errors', 1);
function __autoload($class_name){
	$pathCoreClass=MAIN_PATH . '/application/core/'.$class_name.".php";
	$pathConrollerClass=MAIN_PATH . '/application/controllers/'.$class_name.".php";
	$pathModelClass=MAIN_PATH . '/application/models/'.$class_name.".php";
	if(file_exists($pathCoreClass)){
		require_once $pathCoreClass;
	}
	else if(file_exists($pathConrollerClass))
	{require_once $pathConrollerClass;}
	else {require_once $pathModelClass;}
}
Route::start();

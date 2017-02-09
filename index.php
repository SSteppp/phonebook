<?php

$filePath =__DIR__; 
$filePath=str_replace('\\','/',$filePath);
//var_dump($file_path);
define("MAIN_PATH",$filePath);
ini_set('display_errors', 1);
function __autoload($className)
{
	
	$pathCoreClass=MAIN_PATH . '/application/core/'.$className.".php";
	$pathConrollerClass=MAIN_PATH . '/application/controllers/'.$className.".php";
	$pathModelClass=MAIN_PATH . '/application/models/'.$className.".php";
	$pathHelperClass= MAIN_PATH .'/helper/'.$className.'.php';
	if(file_exists($pathCoreClass)){
		require_once $pathCoreClass;
	}elseif(file_exists($pathConrollerClass)){
		require_once $pathConrollerClass;
	}elseif(file_exists($pathModelClass)){	
		require_once $pathModelClass;
	}else{
		require_once $pathHelperClass;
	}
}
Route::start();

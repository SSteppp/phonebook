<?php
class Route{
	
	static function start(){
		
		$controllerName='Authorization';
		$action='index';
		$route=explode('/',$_SERVER['REQUEST_URI']);
		if(!empty($route[1])){
			$controllerName=$route[1];
		}
		if(!empty($route[2])){
			$action=$route[2];
		}
		
		$controllerName='Controller'.$controllerName;
		//$action='action_'.$action;

		$controller=new $controllerName;
		$controller->actionIndex();
	}
}
?>
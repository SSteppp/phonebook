<?php
class Controller {
	
	public $model;
	public $view;
	static protected $connection;
	function __construct()
	{
		$this->view = new View();
		self::$connection = mysql_connect('localhost', 'root', '');
		mysql_select_db('phonebook',self::$connection);
	}
	
	function actionIndex()
	{
	}
}
?>
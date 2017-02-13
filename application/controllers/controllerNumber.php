<?php
class ControllerNumber extends Controller
{

	function actionIndex()
	{	
		$query = Singleton::getSingl()->query("SELECT * FROM number WHERE id=".Session::get('id'));
		if (Request::post('save')) {
			$id = Session::get('id');
			$name = Request::post('name');
			$number = Request::post('number');
			$result = Singleton::getSingl()->query("INSERT INTO number (id, name, number) VALUES ('$id', '$name', '$number')");
			if (Request::post('update')) {
				
				$result = Singleton::getSingl()->query("UPDATE number SET id");
			}
		}	
		
		$this->view->generate('numberView.php', $query);
	}
}
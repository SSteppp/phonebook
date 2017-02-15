<?php
class ControllerNumber extends Controller
{

	function actionIndex()
	{	
		$params = array(
			"id" => Session::get('id'),
			"name" => Request::post('name'),
			"number" => Request::post('number')
		);
		$query = DB::getDB()->select("SELECT * FROM number WHERE id=':id'", $params);
		if (Request::post('save')) {
			DB::getDB()->insert("INSERT INTO number (id, name, number) VALUES (':id', ':name', ':number')", $params);
			if (Request::post('update')) {
				
				DB::getDB()->update();
			}
		}	
		
		$this->view->generate('numberView.php', $query);
	}
}
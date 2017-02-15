<?php
class ControllerRegistration extends Controller
{

	function actionIndex()
	{	
		
		if (Request::post('submit')) {
			$params = array(
				"login" => Request::post('log'),
				"password" => Request::post('pass')
			);
			DB::getDB()->insert("INSERT INTO user (login, password) VALUES (':login', ':password')");
			Redirect::url('authorization');
		}
		
		$this->view->generate('registrationView.php');
	}
}
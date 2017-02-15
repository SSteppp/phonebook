<?php
class ControllerAuthorization extends Controller
{

	function actionIndex()
	{	
		if (Request::post('submit')) {	
			$params = array(
				"login" => Request::post('login'),
				"password" => Request::post('password')
			);
			$query = DB::getDB()->select("SELECT id FROM user WHERE login=':login' AND password=':password'", $params);
			if (empty($query[0]['id'])) {
				echo 'Неверные Логин или Пароль';
			} else {
				Session::set('login', $params['login']);
				Session::set('password', $params['password']);
				Session::set('id', $query[0]['id']);
				Redirect::url('number');
			}
		}
		
		$this->view->generate('authorizationView.php');
	}
}
<?php
class ControllerAuthorization extends Controller
{

	function actionIndex()
	{	
		DB::getDB();
		$this->view->generate('authorizationView.php');
		if (null!=Request::post('submit')){	
			$login=Request::post('login');
			$password=Request::post('password');
			$query=mysql_query("SELECT id FROM user WHERE login='$login' AND password='$password'",DB::getCon());
			var_dump($query);
			$result=mysql_fetch_array($query);
			var_dump($result);
		
			if(empty($result['id'])){
				echo 'Неверные Логин или Пароль';
			}else{
				Session::addSession('login',$login);
				Session::addSession('password',$password);
				Session::addSession('id',$result['id']);
				header('Location:http://phonebook/number');
			}
		}
	}
}
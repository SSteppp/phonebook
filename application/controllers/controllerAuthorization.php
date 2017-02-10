<?php
class ControllerAuthorization extends Controller
{

	function actionIndex()
	{	
		if (Request::post('submit')){	
			$login=Request::post('login');
			$password=Request::post('password');
			$query=DB::getDB()->query("SELECT id FROM user WHERE login='$login' AND password='$password'");
			$result=mysql_fetch_array($query);

			if(empty($result['id'])){
				echo 'Неверные Логин или Пароль';
			}else{
				Session::set('login',$login);
				Session::set('password',$password);
				Session::set('id',$result['id']);
				Redirect::url('number');
			}
		}
		
		$this->view->generate('authorizationView.php');
	}
}
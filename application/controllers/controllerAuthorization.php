<?php
class ControllerAuthorization extends Controller
{

	function actionIndex()
	{	
		$this->view->generate('authorizationView.php');
		if (isset($_POST['submit']))
		{
			$login=$_POST['login'];
			$password=$_POST['password'];
			$query=mysql_query("SELECT id FROM user WHERE login='$login' AND password='$password'",self::$connection);
			var_dump($query);
			$result=mysql_fetch_array($query);
			var_dump($result);
			if(empty($result['id']))
			{
				echo 'Неверные Логин или Пароль';
			}
			else
			{
				$_SESSION['login']=$login;
				$_SESSION['password']=$password;
				$_SESSION['id']=$result['id'];
				 header('Location:http://phonebook/number');
			
			}
		}
	}
}
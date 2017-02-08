<?php
class ControllerRegistration extends Controller
{

	function actionIndex()
	{	
		$this->view->generate('registrationView.php');
		if(isset($_POST['submit']))
		{
			$login=$_POST['log'];
			$password=$_POST['pass'];
			$query=$query = "INSERT INTO user (login, password) VALUES ('$login', '$password')";
			var_dump($query);
			$result=mysql_query($query,self::$connection);
			var_dump($result);
			header('Location:http://phonebook/authorization');
		}
		
	}
}
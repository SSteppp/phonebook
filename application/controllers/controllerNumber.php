<?php
class Controllernumber extends Controller
{

	function actionIndex()
	{	session_start();
		$query=mysql_query("SELECT * FROM number WHERE id=".$_SESSION['id'],self::$connection);
		$this->view->generate('numberView.php',$query);
		if(isset($_POST['save']))
		{
			$id=$_SESSION['id'];
			$name=$_POST['name'];
			$number=$_POST['number'];
				$query="INSERT INTO number (id, name, number) VALUES ('$id', '$name', '$number')";
				$result=mysql_query($query,self::$connection);
				
					if(isset($_POST['update'])){
						$query="UPDATE number SET id";
				$result=mysql_query($query,self::$connection);
					}
		}	
		
	}
}
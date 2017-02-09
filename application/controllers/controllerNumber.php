<?php
class Controllernumber extends Controller
{

	function actionIndex()
	{	session_start();
		DB::getDB();
		$query=mysql_query("SELECT * FROM number WHERE id=".Session::getSession('id'),DB::getCon());
		$this->view->generate('numberView.php',$query);
		
		if(null!=Request::post('save')){
			$id=Session::getSession('id');
			$name=Request::post('name');
			$number=Request::post('number');
			$query="INSERT INTO number (id, name, number) VALUES ('$id', '$name', '$number')";
			$result=mysql_query($query,DB::getCon());
			if(null!=Request::post('update')){
				$query="UPDATE number SET id";
				$result=mysql_query($query,DB::getCon());
			}
		}	
		
	}
}
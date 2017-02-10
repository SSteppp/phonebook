<?php
class ControllerNumber extends Controller
{

	function actionIndex()
	{	
		$query=DB::getDB()->query("SELECT * FROM number WHERE id=".Session::get('id'));
		
		if(Request::post('save')){
			$id=Session::get('id');
			$name=Request::post('name');
			$number=Request::post('number');
			$result=DB::getDB()->query("INSERT INTO number (id, name, number) VALUES ('$id', '$name', '$number')");
			if(Request::post('update')){
				
				$result=DB::getDB()->query("UPDATE number SET id");
			}
		}	
		
		$this->view->generate('numberView.php',$query);
	}
}
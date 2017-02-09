<?php
class Request
{
	public static function post($name)
	{
		if(isset($_POST[$name])){
			return $_POST[$name];
		}
		return false;
	}
}
?>
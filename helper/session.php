<?php
class Session
{
	public static function addSession($key,$value)
	{
		$_SESSION[$key]=$value;
	}
	
	public static function getSession($value)
	{
		if(isset($_SESSION[$value])){
			return $_SESSION[$value];
		}
		return false;
	}
}
?>
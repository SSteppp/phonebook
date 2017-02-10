<?php
class Session
{
	public static function set($key,$value)
	{
		$_SESSION[$key]=$value;
	}
	
	public static function get($value)
	{
		if(isset($_SESSION[$value])){
			return $_SESSION[$value];
		}
		return false;
	}
}

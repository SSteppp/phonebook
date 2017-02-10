<?php

class Redirect
{
	public static function url($name)
	{
		$setting=parse_ini_file('setting.ini');
		header('Location:http://'.$setting['domain'].'/'.$name);
	}
}
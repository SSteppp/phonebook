<?php

class Redirect
{
	public static function url($name)
	{
		header('Location:http://'.Singleton::getSingl()->setting()['domain'].'/'.$name);
	}
}
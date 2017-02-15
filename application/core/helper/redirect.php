<?php

class Redirect
{
	public static function url($name)
	{
		header('Location:http://'.Setting::getSetting()->get()['domain'].'/'.$name);
	}
}
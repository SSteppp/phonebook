<?php
class Singleton
{
	private static $con;
	private static $singl = null;
	private static $setting;
	public static function getSingl()
	{
		if (self::$singl != null) {
			return self::$singl;
		} else {
		return new self;
		}
	}
	
	private function __construct()
	{	
		self::$setting = parse_ini_file('setting.ini');
		self::$con = mysql_connect(self::$setting['host'],self::$setting['user'], self::$setting['password']);
		mysql_select_db(self::$setting['dbName'], self::$con);
	}
	
	public  function query($query)
	{
		$result = mysql_query($query, self::$con);
		return $result;
	}
	
	public function setting()
	{
		return self::$setting;
	}
	
}

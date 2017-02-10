<?php
class DB{

	private static $con;
	private static $db=null;
	
	public static function getDB()
	{
		if(self::$db!=null){
			return self::$db;
		}else{
		return new self;
		}
	}
	
	private function __construct()
	{
		$setting=parse_ini_file('setting.ini');
		self::$con=mysql_connect($setting['host'], $setting['user'], $setting['password']);
		mysql_select_db($setting['dbName'],self::$con);
		
	}
	
	public function query($query)
	{
		$result=mysql_query($query, self::$con);
		return $result;
	}
}

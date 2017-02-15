<?php
class DB
{
	private static $con;
	private static $db = null;
	
	public static function getDB()
	{
		if (self::$db != null) {
			return self::$db;
		} else {
		return new self;
		}
	}
	
	private function __construct()
	{	
		self::$con = mysql_connect(Setting::getSetting()->get()['host'],Setting::getSetting()->get()['user'],Setting::getSetting()->get()['password']);
		mysql_select_db(Setting::getSetting()->get()['dbName'], self::$con);
	}
	
	public  function select($query,$params)
	{
		foreach ($params as $key => $value) {
			$query = str_replace(":" . $key, $value, $query);
		}
		$result = mysql_query($query, self::$con);
		while ($row=mysql_fetch_array($result)) {
			$data[] = $row;
		}
		return $data;
	}
	
	public function insert($query,$params)
	{
		foreach ($params as $key => $value) {
			$query = str_replace(":" . $key, $value, $query);
		}
		$result = mysql_query($query, self::$con);
	}
	public function update()
	{
		$result = mysql_query("UPDATE number SET id", self::$con);
	}
}

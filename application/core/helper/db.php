<?
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
		self::$con=mysql_connect("localhost","root","");
		mysql_select_db("phonebook",self::$con);
		
	}
	function getCon()
	{
			return self::$con;
	}
}
?>
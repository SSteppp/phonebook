<?php
class Setting
{
	private static $setting = null;
	private static $settings;
	public static function getSetting()
	{
		if (self::$setting != null) {
			return self::$setting;
		} else {
		return new self;
		}
	}
	
	private function __construct()
	{	
		self::$settings = parse_ini_file('setting.ini');
	}
	
	public function get()
	{
		return self::$settings;
	}
	
}

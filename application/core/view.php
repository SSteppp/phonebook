<?php
class View
{
	
	function generate($contentView,$data=null )
	{
		//include MAIN_PATH .'/application/views/'.$contentView;
		ob_start();
		include MAIN_PATH .'/application/views/'.$contentView;
		$content=ob_get_clean();
		Template::show($content);
	}
}
?>
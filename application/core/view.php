<?php
class View
{
	
	function generate($contentView,$data=null )
	{
		include MAIN_PATH .'/application/views/'.$contentView;
	}
}
?>
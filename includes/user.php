<?php
class Customfunc {
	
	function getusername($id)
	{
		global $sqlobj;
		
		$news_res = $sqlobj->query("select username from users where id = ".$id);
		return $news_res[0]['username'];
	}
	
}
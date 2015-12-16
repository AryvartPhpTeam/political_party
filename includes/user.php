<?php
class Customfunc {
	
	function getusername($id)
	{
		global $sqlobj;
		
		$news_res = $sqlobj->query("select username from users where id = ".$id);
		return $news_res[0]['username'];
	}
	
	function getpageresults($table, $per_page = 10, $sql = '')
	{
		global $sqlobj;
		
		$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
		
		$start_limit = ($current_page - 1) * $per_page;

		if($sql == '')
			$sql = ("select * from $table ");


		return $slider_res = $sqlobj->query("$sql limit $start_limit, $per_page");	
		
	}
	
	function getpagination($table, $page, $per_page = 10)
	{
		global $sqlobj;
		
		$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
		$no_of_results = $sqlobj->query("select count(*) as cnt from $table");
		
		if(count($no_of_results))
			$no_of_results = $no_of_results[0]['cnt'];
		else
			return;
		
		$total_pages = ceil($no_of_results/$per_page);
		$html = '<div class="text-center"><ul class="pagination">';
		for($i=1;$i<=$total_pages;$i++)
		{
			$html .= '<li><a href="'.$page.'.php?page='.$i.'">'.$i.'</a></li>';
		}
		$html .= '</ul></div>';
		
		return $html;
	}
	function getcategory_name($id) 
	{
		global $sqlobj;
		$blog_result=$sqlobj->query("SELECT category_name FROM blog_category WHERE id=".$id);
    	return $blog_result[0]['category_name'];

	}
	
}

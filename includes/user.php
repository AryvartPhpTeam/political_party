<?php
class Customfunc {
	
	function getusername($id)
	{
		global $sqlobj;
		
		$news_res = $sqlobj->query("select username from users where id = ".$id);
		return $news_res[0]['username'];
	}
	
	function getpageresults($table, $per_page = 10)
	{
		global $sqlobj;
		
		$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
		
		$start_limit = ($current_page - 1) * $per_page;

		return $slider_res = $sqlobj->query("select * from $table limit $start_limit, $per_page");	
		
	}
	
	function getpagination($table, $page, $per_page = 10)
	{
		global $sqlobj;
		
		$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
		$no_of_results = $sqlobj->query("select count(*) as cnt from $table")[0]['cnt'];
		
		$total_pages = ceil($no_of_results/$per_page);
		$html = '<div class="text-center"><ul class="pagination">';
		for($i=1;$i<=$total_pages;$i++)
		{
			$html .= '<li><a href="'.$page.'.php?page='.$i.'">'.$i.'</a></li>';
		}
		$html .= '</ul></div>';
		
		return $html;
	}
}
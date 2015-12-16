<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}
$title="Blog Management";

if(isset($_GET['delete']) && !empty($_GET['delete']))
{
	$sqlobj->query("delete from blogs where id=".$_GET['delete']);
	header("location:blog.php");
	exit;
}
if(isset($_POST['submit']) && isset($_POST["bulk"] ))
	{						    
		$chek=$_POST["bulk"];
		$chk=implode(",",$_POST["check"]);
		if($chek == 'publish')
		{
		 $sqlobj->query("UPDATE blogs SET status='yes' WHERE id IN ($chk)");
			header("location:blog.php");	
		}
		elseif($chek == 'unpublish')
		{
			$sqlobj->query("UPDATE blogs SET status='no' WHERE id IN ($chk)");
			header("location:blog.php");	
		}
	}
$per_page = 10;
$blog_res = $ownobj->getpageresults('blogs', $per_page);

$blog_result = $sqlobj->query("select c.category_name,b.id, b.title,b.category,b.description,b.status from blogs b inner join blog_category c on b.category = c.id " );


if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
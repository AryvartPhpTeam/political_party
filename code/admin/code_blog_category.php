<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}
if(isset($_GET['delete']) && !empty($_GET['delete']))
{
	$sqlobj->query("delete from blog_category where id=".$_GET['delete']);
	header("location:blog_category.php");
	exit;
}
if(isset($_POST['submit']) && isset($_POST["data"] ))
	{						    
		$chek=$_POST["data"];
		$chk=implode(",",$_POST["check"]);
		if($chek == 'publish')
		{
		 $sqlobj->query("UPDATE blog_category SET status='Yes' WHERE id IN ($chk)");
			header("location:blog_category.php");	
		}
		elseif($chek == 'unpublish')
		{
			$sqlobj->query("UPDATE blog_category SET status='No' WHERE id IN ($chk)");
			header("location:blog_category.php");	
		}
		elseif($chek == 'delete')
		{
			$sqlobj->query("DELETE FROM blog_category WHERE id IN ($chk) ");
			header("location:blog_category.php");	
		}
	}
$per_page = 10;
$blog_res = $ownobj->getpageresults('blog_category', $per_page);

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
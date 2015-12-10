<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}

if(isset($_GET['delete']) && !empty($_GET['delete']))
{
	$sqlobj->query("delete from blog where id=".$_GET['delete']);
	header("location:blog.php");
	exit;
}
$per_page = 10;
$blog_res = $ownobj->getpageresults('blog', $per_page);


if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
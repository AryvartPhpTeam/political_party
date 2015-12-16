<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}
$title="News Management";

if(isset($_GET['delete']) && !empty($_GET['delete']))
{
	$sqlobj->query("delete from news where id=".$_GET['delete']);
	header("location:news.php");
	exit;
}
$per_page = 10;
$news_res = $ownobj->getpageresults('news', $per_page);


if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
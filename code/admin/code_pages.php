<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}

if(isset($_GET['delete']) && !empty($_GET['delete']))
{
	$sqlobj->query("delete from pages where id=".$_GET['delete']);
	header("location:pages.php");
	exit;
}

$news_res = $sqlobj->query("select * from pages");

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
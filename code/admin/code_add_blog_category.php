<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}
if(isset($_POST['submit']))
{
	$category_name = $_POST['category_name'];
	$status = $_POST['status'];
	$sqlobj->query("insert into blog_category(category_name,status) values('$category_name','$status')");
	
	header("location:add_blog_category.php");
}

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
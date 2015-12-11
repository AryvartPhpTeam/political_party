<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}
if(isset($_POST['submit']) && isset($_GET['id']))
{
	$category_name = $_POST['category_name'];
	$status = $_POST['status'];
	$sqlobj->query("update blog_category set category_name='$category_name', status='$status' where id=".$_GET['id']);
	
	header("location:blog_category.php");

}
elseif(isset($_POST['submit']))
{
	$category_name = $_POST['category_name'];
	$status = $_POST['status'];
	$sqlobj->query("insert into blog_category(category_name,status) values('$category_name','$status')");
	
	header("location:blog_category.php");
}

if(isset($_GET['id']) && !empty($_GET['id']))
{
	$blog_res = $sqlobj->query("select * from blog_category where id = ".$_GET['id']);
	$blog = $blog_res[0];
}


if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
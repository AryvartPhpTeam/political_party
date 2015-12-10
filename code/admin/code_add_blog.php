<?php
if(!isset($_SESSION['user']))
{
	header("location:index.php");
	exit;
}
if(isset($_POST['submit']) && isset($_GET['id']))
{
	$title = $_POST['title'];
	$category = $_POST['category'];
	$description=$_POST['description'];
	$status = $_POST['status'];
	$sqlobj->query("update blogs set title='$title',category='$category',description='$description',status='$status' where id=".$_GET['id']);
	
	header("location:add_blog.php");

}
elseif(isset($_POST['submit']))
{
	$title = $_POST['title'];
	$category = $_POST['category'];
	$description=$_POST['description'];
	$status = $_POST['status'];
			
	$sqlobj->query("insert into blogs(title,category,description,status, user_id) values('$title','$category','$description','$status', ".$_SESSION['user']['id'].")");
	
	header("location:add_blog.php");

}

if(isset($_GET['id']) && !empty($_GET['id']))
{
	$blog_r = $sqlobj->query("select * from blogs where id = ".$_GET['id']);
	$blog = $blog_r[0];
}
$blog_res = $sqlobj->query("select * from blog_category where status='yes' ");

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';


	?>
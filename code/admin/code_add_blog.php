<?php
if(!isset($_SESSION['user']))
{
	header("location:index.php");
	exit;
}

if(isset($_POST['submit']))
{
	$title = $_POST['title'];
	$description = $_POST['description'];
	$category=$_POST['category'];
	$status = $_POST['status'];
			
	$sqlobj->query("insert into blogs(title,category,description,status, user_id) values('$title','$category','$description','$status', ".$_SESSION['user']['id'].")");
	
	header("location:add_blog.php");
}


	$blog_res = $sqlobj->query("select * from blog_category where status=1 ");
	
  

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
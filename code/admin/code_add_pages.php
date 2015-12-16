<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}
$title= "Add Page";
if(isset($_POST['submit']) && isset($_GET['id']))
{
	$title = $_POST['title'];
	$description = $_POST['description'];
	$image = '';
	$status=$_POST['status'];
	if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name']))
	{
		$image = strtotime("now").'_'.str_replace(" ", "", $_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], UPLOADS.$image);
	}
	elseif(isset($_POST['old_image']))
		$image = $_POST['old_image'];
	
	
	$sqlobj->query("update pages set title='$title', description='$description', image='$image',status='$status' where id=".$_GET['id']);
	
	header("location:pages.php");

}
elseif(isset($_POST['submit']))
{
	$title = $_POST['title'];
	$description = $_POST['description'];
	$image = '';
	$status = $_POST['status'];
	
	if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name']))
	{
		$image = strtotime("now").'_'.str_replace(" ", "", $_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], UPLOADS.$image);
	}
	
	$sqlobj->query("insert into pages(title, description, image,status, user_id) values('$title', '$description', '$image','$status', ".$_SESSION['user']['id'].")");
	
	header("location:pages.php");
}

if(isset($_GET['id']) && !empty($_GET['id']))
{
	$pages_res = $sqlobj->query("select * from pages where id = ".$_GET['id']);
	$pages = $pages_res[0];
}

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
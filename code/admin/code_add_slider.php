<?php

if(isset($_POST['submit']) && isset($_GET['id']))
{
	$title = $_POST['title'];
	$link = $_POST['link'];
	$status=$_POST['status'];
	$image = '';
	if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name']))
	{
		$image = strtotime("now").'_'.str_replace(" ", "", $_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], UPLOADS.$image);
	}
	elseif(isset($_POST['old_image']))
		$image = $_POST['old_image'];
	
	$sqlobj->query("update slider set title='$title', link='$link', image='$image',status='$status' where id=".$_GET['id']);
	
	header("location:slider.php");
	exit;

}
elseif(isset($_POST['submit']))
{
	$title = $_POST['title'];
	$link = $_POST['link'];
	$status=$_POST['status'];
	$image = '';
	if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name']))
	{
		$image = strtotime("now").'_'.str_replace(" ", "", $_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], UPLOADS.$image);
	}
	$sqlobj->query("insert into slider(title,link,image,status,user_id ) values('$title','$link','$image','$status',".$_SESSION['user']['id'].")");
	header("location:slider.php");
	exit;
}

if(isset($_GET['id']) && !empty($_GET['id']))
{
	$slider_res = $sqlobj->query("select * from slider where id = ".$_GET['id']);
	$slider = $slider_res[0];
}

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
	
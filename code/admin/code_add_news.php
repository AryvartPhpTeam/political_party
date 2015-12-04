<?php

if(isset($_POST['submit']) && isset($_GET['id']))
{
	$title = $_POST['title'];
	$description = $_POST['description'];
	$image = '';
	
	if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name']))
	{
		$image = strtotime("now").'_'.str_replace(" ", "", $_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], UPLOADS.$image);
	}
	elseif(isset($_POST['old_image']))
		$image = $_POST['old_image'];
	
	$sqlobj->query("update news set title='$title', description='$description', image='$image' where id=".$_GET['id']);
	
	header("location:news.php");

}
elseif(isset($_POST['submit']))
{
	$title = $_POST['title'];
	$description = $_POST['description'];
	$image = '';
	
	if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name']))
	{
		$image = strtotime("now").'_'.str_replace(" ", "", $_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], UPLOADS.$image);
	}
	
	$sqlobj->query("insert into news(title, description, image, user_id) values('$title', '$description', '$image', ".$_SESSION['user']['id'].")");
	
	header("location:news.php");
}

if(isset($_GET['id']) && !empty($_GET['id']))
{
	$news_res = $sqlobj->query("select * from news where id = ".$_GET['id']);
	$news = $news_res[0];
}

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
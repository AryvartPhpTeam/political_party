<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}
if(isset($_POST['submit']) && isset($_GET['id']))
{
	$event_title = $_POST['event_title'];
	$image = '';
	for($i=0;$i<count($_FILES['image']['name']);$i++)
    {	
	if(isset($_FILES['image']['name'][$i]) && !empty($_FILES['image']['name'][$i]))
	{
		$image = strtotime("now").'_'.str_replace(" ", "", $_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], UPLOADS.$image);
	}
	elseif(isset($_POST['old_image']))
		$image = $_POST['old_image'];
	
	}
	$sqlobj->query("update event_gallery set event_id='$event_title', image='$image' where id=".$_GET['id']);
	
	header("location:event_gallery_management.php");

}
elseif(isset($_POST['submit']))
{
	$event_title = $_POST['event_title'];
	$image = '';
	for($i=0;$i<count($_FILES['image']['name']);$i++)
    {	
	if(isset($_FILES['image']['name'][$i]) && !empty($_FILES['image']['name'][$i]))
	{
		$image = strtotime("now").'_'.str_replace(" ", "", $_FILES['image']['name'][$i]);
		move_uploaded_file($_FILES['image']['tmp_name'][$i], UPLOADS.$image);
	}
	
	$sqlobj->query("insert into event_gallery(event_id,image) values('$event_title','$image')");
	}
	header("location:event_gallery.php");
}



$event_res = $sqlobj->query("select * from events ");
if(isset($_GET['id']) && !empty($_GET['id']))
{
	$manage_res = $sqlobj->query("select * from event_gallery where id = ".$_GET['id']);
	$manage = $manage_res[0];
}

	
if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
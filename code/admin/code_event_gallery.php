<?php
if(!isset($_SESSION['user']))
{
	header("location:index.php");
	exit;
}

if(isset($_POST['submit']))
{
	$event_title = $_POST['event_title'];
	$title = $_POST['title'];
	$image = '';
	for($i=0;$i<count($_FILES['image']['name']);$i++)
    {	
	if(isset($_FILES['image']['name'][$i]) && !empty($_FILES['image']['name'][$i]))
	{
		$image = strtotime("now").'_'.str_replace(" ", "", $_FILES['image']['name'][$i]);
		move_uploaded_file($_FILES['image']['tmp_name'][$i], UPLOADS.$image);
	}
	
	$sqlobj->query("insert into event_gallery(event_id,image) values('$event_title','$image')");
	}exit;
	header("location:event_gallery.php");
}


	$event_res = $sqlobj->query("select * from events ");
	
  

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
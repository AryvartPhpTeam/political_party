<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}
$title="Event Gallery Management";
if(isset($_GET['delete']) && !empty($_GET['delete']))
{
	$sqlobj->query("delete from event_gallery where id=".$_GET['delete']);
	header("location:event_gallery_management.php");
	exit;
}


$gallery_res = $sqlobj->query("SELECT  e.event_title,g.event_id,g.image,g.id FROM event_gallery g INNER JOIN events e ON g.event_id=e.id");


if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
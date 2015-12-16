<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}

if(isset($_GET['delete']) && !empty($_GET['delete']))
{
	$sqlobj->query("delete from event_gallery where id=".$_GET['delete']);
	header("location:event_gallery_management.php");
	exit;
}

$per_page = 10;
$manage_res = $ownobj->getpageresults('event_gallery', $per_page);

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
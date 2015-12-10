<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}

if(isset($_GET['delete']) && !empty($_GET['delete']))
{
	$sqlobj->query("delete from events where id=".$_GET['delete']);
	header("location:events_management.php");
	exit;
}

$events = $sqlobj->query("select * from events");


if(isset($_POST["submit"])&& isset($_POST["select"]))
{
	$chek=$_POST["select"];
	$cheked=implode(",",$_POST["check"]);
	if($chek == 'publish')
		{ 
		
		$sqlobj->query("UPDATE events SET status='yes' WHERE id IN ($cheked)");
		header("location:events_management.php");
		}
	elseif($chek == 'unpublish')
		{
		$sqlobj->query("UPDATE events SET status='no' WHERE id IN ($cheked)");
		header("location:events_management.php");
		}
}	
$per_page = 10;
$slider_res = $ownobj->getpageresults('slider', $per_page);
	
if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}

if(isset($_GET['delete']) && !empty($_GET['delete']))
{
	$sqlobj->query("delete from leaders where id=".$_GET['delete']);
	header("location:leaders_management.php");
	exit;
}

$leaders = $sqlobj->query("select * from leaders");


if(isset($_POST["submit"])&& isset($_POST["select"]))
{
	$chek=$_POST["select"];
	$cheked=implode(",",$_POST["check"]);
	if($chek== 'delete')
		{	
			$sqlobj->query("delete from leaders where id ($checked)");
		}
	elseif($chek == 'publish')
		{ 
		
		$sqlobj->query("UPDATE leaders SET status='yes' WHERE id IN ($cheked)");
		header("location:leaders_management.php");
		}
	elseif($chek == 'unpublish')
		{
		$sqlobj->query("UPDATE leaders SET status='no' WHERE id IN ($cheked)");
		header("location:leaders_management.php");
		}
}		
if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
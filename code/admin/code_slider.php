<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}

if(isset($_GET['delete']) && !empty($_GET['delete']))
{
	$sqlobj->query("delete from slider where id=".$_GET['delete']);
	header("location:slider.php");
	exit;
}
$slider_res = $sqlobj->query("select * from slider");
if(isset($_POST['submit']) && isset($_POST["data"] ))
	{						    
		$chek=$_POST["data"];
		$chk=implode(",",$_POST["check"]);
		if($chek == 'publish')
		{
		 $sqlobj->query("UPDATE slider SET status='yes' WHERE id IN ($chk)");
			header("location:slider.php");	
		}
		elseif($chek == 'unpublish')
		{
			$sqlobj->query("UPDATE slider SET status='no' WHERE id IN ($chk)");
			header("location:slider.php");	
		}
		elseif($chek == 'delete')
		{
			$sqlobj->query("DELETE FROM slider WHERE id IN ($chk) ");
			header("location:slider.php");	
		}
	}

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
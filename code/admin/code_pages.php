<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}

if(isset($_GET['delete']) && !empty($_GET['delete']))
{
	$sqlobj->query("delete from pages where id=".$_GET['delete']);
	header("location:pages.php");
	exit;
}

<<<<<<< Updated upstream
$news_res = $sqlobj->query("select * from pages");
=======
$pages_res = $sqlobj->query("select * from pages");

 if(isset($_POST['submit']) && isset($_POST["bulk"] ))
	{						    
		$chek=$_POST["bulk"];
		$chk=implode(",",$_POST["check"]);
		if($chek == 'publish')
		{
		 $sqlobj->query("UPDATE pages SET status='yes' WHERE id IN ($chk)");
			header("location:pages.php");	
		}
		elseif($chek == 'unpublish')
		{
			$sqlobj->query("UPDATE pages SET status='no' WHERE id IN ($chk)");
			header("location:pages.php");	
		}
	}	
							
>>>>>>> Stashed changes

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
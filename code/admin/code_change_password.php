<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}
$title="Change Password";
if(isset($_POST['submit']))
{
	$results = $sqlobj->query("SELECT id,password from users where id =". $_SESSION['user']['id']);
	if (($_POST["newPassword"]) == ($_POST["confirmPassword"]))
	{
		if (md5($_POST["currentPassword"]) == $results[0]["password"])
		{
			$newPassword=md5($_POST['newPassword']);
			$sqlobj->query("UPDATE users set password='" . $newPassword . "'WHERE id =". $_SESSION['user']['id']);
			header("location:dashboard.php");
			exit;
		}
		else 
		{
			$error1 = 'Mismatch old password. Please Try Again!!';
		}
	}
	else 
	{
		$error = 'Enter same confirmation Password. Please Try Again!!';
	}
	
}


//$news_res = $sqlobj->query("select * from users");

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';

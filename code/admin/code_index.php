<?php
if(isset($_SESSION['user']))
{
	header("location:dashboard.php");
	exit;
}

if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$res = $sqlobj->query("Select * FROM users where username='$username' and password = '$password'");
	if(count($res))
	{
		$_SESSION['user'] = $res[0];
		header("location:dashboard.php");
		exit;
	}
	else
	{
		$error = 'Invalid login detail. Please Try Again!!';
	}
}

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
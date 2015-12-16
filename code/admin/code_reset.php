<?php
if(isset($_SESSION['user']))
{
	header("location:dashboard.php");
	exit;
}
$title="Reset";
if(isset($_GET['verify'])&& !empty($_GET['verify']))
{
    $email=base64_decode(base64_decode($_GET['verify']));	
	$newpassword = md5($_POST['newpassword']);
		
	$sqlobj->query("update users set password='$newpassword' where email='$email'");
	header("location:index.php");
}

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
<?php

if(isset($_POST['submit']))
{
	$site_title = $_POST['sitetitle'];
	$site_description = $_POST['sitedescription'];
	$meta_keyword = $_POST['metakeyword'];
	$meta_description = $_POST['metadescription'];
	$facebook_link = $_POST['facebook'];
	$twitter_link = $_POST['twitter'];
	$googleplus_link = $_POST['google'];
	
	$sqlobj->query("insert into settings_page(site_title,site_description, meta_keyword,meta_description,facebook_link,twitter_link,googleplus_link) values('$site_title', '$site_description', '$meta_keyword','$meta_description','$facebook_link','$twitter_link','$googleplus_link')");
	header("location:settings_page.php");
	exit();
	
}

	$settings = $sqlobj->query("select * from settings_page where id='1'");
	

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
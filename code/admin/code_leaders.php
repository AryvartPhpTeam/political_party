<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}
if(isset($_POST['submit']) && isset($_GET['id']))
{	
	$leader_title=$_POST['leadertitle'];
	$position=$_POST['position'];
	$join_date=$_POST['joindate'];
	$age=$_POST['age'];
	$date_of_birth=$_POST['dob'];
	$native_place=$_POST['nativeplace'];
	$image='';
	$status=$_POST['status'];
	$summary=$_POST['summary'];
	$join=date_format(date_create($join_date),"Y-m-d");
	$date=date_format(date_create($date_of_birth),"Y-m-d");
	if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name']))
	{ 
		$image = strtotime("now").'_'.str_replace(" ", "", $_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], UPLOADS.$image);
	}
	elseif(isset($_POST['old_image']))
	$image=$_POST['old_image'];
	$sqlobj->query("update leaders set leader_title='$leader_title',position='$position',
	join_date='$join',age='$age',date_of_birth='$date',native_place='$native_place',image='$image',status='$status',summary='$summary' where id=".$_GET['id']);
	header("location:leaders_management.php");
}
elseif(isset($_POST['submit']))
{
	$leader_title=$_POST['leadertitle'];
	$position=$_POST['position'];
	$join_date=$_POST['joindate'];
	$age=$_POST['age'];
	$date_of_birth=$_POST['dob'];
	$native_place=$_POST['nativeplace'];
	$image='';
	$status=$_POST['status'];
	$summary=$_POST['summary'];
	$join=date_format(date_create($join_date),"Y-m-d");
	$date=date_format(date_create($date_of_birth),"Y-m-d");
	if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name']))
	{
		$image = strtotime("now").'_'.str_replace(" ", "", $_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], UPLOADS.$image);
	}
		
	$sqlobj->query("insert into leaders(leader_title,position,join_date,
	age,date_of_birth,native_place,image,status,summary,user_id) values('$leader_title',
	'$position','$join','$age','$date','$native_place','$image','$status',
	'$summary',".$_SESSION['user']['id'].")");
	
	header("location:leaders_management.php");
}
if(isset($_GET['id']) && isset($_GET['id']))
{
$leaders=$sqlobj->query("select * from leaders where id=".$_GET['id']);
$lead=$leaders[0];
}


if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>	
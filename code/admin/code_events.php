<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}
$title="Add Events";
if(isset($_POST['submit']) && isset($_GET['id']))
{	
	$event_title=$_POST['eventtitle'];
	$description=$_POST['description'];
	$start_date_and_time=$_POST['stdate'];
	$end_date_and_time=$_POST['etdate'];
	$location=$_POST['location'];
	$status=$_POST['status'];
	$event_head=$_POST['eventhead'];
	$image='';
	$event_contact=$_POST['eventcontact'];
	$event_website=$_POST['eventwebsite'];
	$no_of_participant=$_POST['noofparticipant'];
	$stdate=date_format(date_create($start_date_and_time),"Y-m-d H:i");
	$enddate=date_format(date_create($end_date_and_time),"Y-m-d H:i");
	if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name']))
	{ 
		$image = strtotime("now").'_'.str_replace(" ", "", $_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], UPLOADS.$image);
	}
	elseif(isset($_POST['old_image']))
	$image=$_POST['old_image'];
	

	$sqlobj->query("update events set event_title='$event_title',start_date_and_time='$stdate',
	end_date_and_time='$enddate',event_head='$event_head',status='$status',image='$image',event_contact='$event_contact', event_website='$event_website',no_of_participant='$no_of_participant' where id=".$_GET['id']);

	header("location:events_management.php");
}
elseif(isset($_POST['submit']))
{
	$event_title=$_POST['eventtitle'];
	$description=$_POST['description'];
	$start_date_and_time=$_POST['stdate'];
	$end_date_and_time=$_POST['etdate'];
	$location=$_POST['location'];
	$status=$_POST['status'];
	$event_head=$_POST['eventhead'];
	$event_contact=$_POST['eventcontact'];
	$image='';
	$event_website=$_POST['eventwebsite'];
	$no_of_participant=$_POST['noofparticipant'];
	$stdate=date_format(date_create($start_date_and_time),"Y-m-d H:i");
	$enddate=date_format(date_create($end_date_and_time),"Y-m-d H:i");
	if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name']))
	{
		$image = strtotime("now").'_'.str_replace(" ", "", $_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], UPLOADS.$image);
	}
	
	$sqlobj->query("insert into events(event_title,description,start_date_and_time,end_date_and_time,location,status,event_head,event_contact,image,event_website,no_of_participant,user_id) 
	values('$event_title','$description','$stdate','$enddate','$location','$status','$event_head','$event_contact','$image','$event_website','$no_of_participant',".$_SESSION['user']['id'].")");
	
	header("location:events_management.php");
}
if(isset($_GET['id']) && isset($_GET['id']))
{
$events=$sqlobj->query("select * from events where id=".$_GET['id']);
$mang=$events[0];
}

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';

	?>	
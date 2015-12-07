<?php
if(isset($_SESSION['user']))
{
	header("location:dashboard.php");
	exit;
}
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$firstname= $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$status = $_POST['status'];
	$role= $_POST['role'];
	$confirm_code=md5(uniqid(rand(1,1000)));
	 
	
	$signup=$sqlobj->query("insert into users(username, firstname,lastname,email, password,status,role,confirm_code) values('$username','$firstname','$lastname','$email', '$password', '$status', '$role','$confirm_code')");
	if($signup)
	{
	        $to      = $email; 
            $subject = 'Signup | Verification'; 
            $message = ' Thanks for signing up!
             Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.

             Please click the below link to activate your account:
             http://'.BASE_URL.'/signup.php?verify='.base64_encode(base64_encode($email)); 

            $headers = 'From:noreply@yourwebsite.com' . "\r\n"; 
			mail($to, $subject, $message, $headers); 
	}
	
}


if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
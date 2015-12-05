<?php
if(isset($_SESSION['user']))
{
	header("location:dashboard.php");
	exit;
}
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$forgot= $sqlobj->query("select id,email from users where email='$email'");
	if($forgot)
	{
	        $to      = $email; 
            $subject = 'Signup | Verification'; 
            $message = ' Thanks for signing up!
             Your account has been created, you can reset the password  after you have activated your account by pressing the url below.

             Please click the below link to activate your account:
             http://'.BASE_URL.'/reset.php?verify='.base64_encode(base64_encode($email)); 

            $headers = 'From:noreply@yourwebsite.com' . "\r\n"; 
			mail($to, $subject, $message, $headers); 
	}
	
}

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>
	
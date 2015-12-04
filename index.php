<?php
include('config.php');
include(CODE_PATH.'loader.php');
$page = str_replace(".php", "", basename(__FILE__));

if(file_exists(CODE_PATH.$page.'.php'))
	include(CODE_PATH.$page.'.php');
else
	echo 'Code file not found';
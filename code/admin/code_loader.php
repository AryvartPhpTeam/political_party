<?php
include(INCLUDE_PATH.'user.php');
include(INCLUDE_PATH.'mysql.php');
global $sqlobj, $ownobj;
$sqlobj = new MySQLConn();
$ownobj = new Customfunc();
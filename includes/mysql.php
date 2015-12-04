<?php
class MySQLConn {
	public function __construct(){
		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DB)
		  or die ("<br/>Could not connect to MySQL server");
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		} 
		$this->conn = $conn;
	}
	public function query($sql){
	 
	  $res = mysqli_query($this->conn, $sql);
	 
	  if ($res){
		if (stripos($sql,'SELECT') === false){
		  return true;
		}
	  }
	  else{
		if (stripos($sql,'SELECT') === false){
		  return false;
		}
		else{
		  return null;
		}
	  }
	 
	  $results = array();
	 
	  while ($row = mysqli_fetch_assoc($res)){
	 
		$results[] = $row;
	  }
	  return $results;      
	}
}
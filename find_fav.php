<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");
$db = mysql_select_db("calvin_db"); 


$json=array();
$results = array();

$type = @$_GET['type'];
//mysql_select_db("calvin_db",$connection) or die("Could not select database");
if($type == "read"){
	$id = $_GET['center_id'];

	$show_result = mysql_query("select * from center WHERE center_id='$id'");
		
		
		

	while($row = mysql_fetch_array($show_result)){


		$tempObj = array();
		$tempObj['center_name'] = $row['center_name'];
		$tempObj['center_tel'] = $row['center_tel'];
		$tempObj['center_address'] = $row['center_address'];
		$tempObj['center_website'] = $row['center_website'];
		
		$json[] = $tempObj;
	}	
	echo json_encode($json);
}

?>
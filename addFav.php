<?php


$hostname = "127.0.0.1";
$username = "root";
$password = "";
$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");
$db = mysql_select_db("calvin_db"); 



$centre_id = $_POST['center_fav'];

$sql = "INSERT INTO `fav` (`fav_id`) VALUES ('$centre_id');";


$result = mysql_query($sql);

echo "Added into the favourite list";

?>
<?php 

session_start(); 
$_SESSION['user_name'] = $_POST['user_name'];


$hostname = "127.0.0.1";
$username = "root";
$password = "";
$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");
$db = mysql_select_db("calvin_db"); 

// select the database
$name=$_POST['user_name']; //get the username
$password= $_POST['user_password']; // get the password



// Find the user by username and password
$result = mysql_query("SELECT * FROM user WHERE user_name='$name' AND user_pwd='$password'");
$data = mysql_num_rows($result);
if($data==1){
	echo "Login successfully";
	//$_SESSION['user_name'] = $name;

}else{
	echo "Incorrect username or password ";
}
mysql_close ($connection); // Connection Closed.
?>
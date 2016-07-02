<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");
$db = mysql_select_db("calvin_db"); 


$name=$_POST['reg_name']; 
$email=$_POST['reg_email'];
$reg_password=$_POST['password']; 


// Check e-mail address syntax is valid
$email = filter_var($email, FILTER_SANITIZE_EMAIL); 
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email";
}else{
$result = mysql_query("SELECT * FROM user WHERE user_email='$email'");//check the account is exisiting
$data = mysql_num_rows($result);
if(($data)==0){
$query = mysql_query("INSERT INTO `user` (`user_name`, `user_pwd`, `user_email`) VALUES ('$name', '$reg_password', '$email')"); //insert the data to database
if($query){
echo "Registation successfully";
}else
{
echo "Error";
}
}else{
echo "This account or email is already registered.";
}
}
mysql_close ($connection);
?>
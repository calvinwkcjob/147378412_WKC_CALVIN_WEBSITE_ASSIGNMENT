<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");
$db = mysql_select_db("calvin_db"); 

$del_password = $_DELETE["password"]; //get the password from .html
echo $del_password;


$isLogin = null;
$checkExist = mysql_query("select * from user where user_pwd = '$del_password'");
while($row = mysql_fetch_assoc($checkExist)){
    $isLogin = $row["user"];
	break;
}

if($isLogin != null){
   print("The password is wrong!");
   return;
}
$sql = "DELETE FROM user WHERE user_name = 'sheung'";

$result = mysql_query($sql);

echo "Delete Account Successful!";

?>
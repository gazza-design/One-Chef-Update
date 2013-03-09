<?php

session_start();
include("db.php");

// username and password sent from Form
$myusername=$_POST['username'];
$mypassword=$_POST['password']; 

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$mypassword = md5($mypassword);

$sql="SELECT * FROM users WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$row = mysql_fetch_assoc($result);
$count=mysql_num_rows($result);


if($count==1)
{
	error_reporting(E_ALL);
$_SESSION["user"]=$myusername;
$_SESSION["user_id"] = $row['ID'];
header("location: home.php");
exit;
}
else
{
echo "Your Login Name or Password is invalid";
}
?>
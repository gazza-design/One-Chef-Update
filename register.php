<?php 
include("db.php"); 

if (isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email']))
 
{ 
//Prevent SQL injections 
$username = mysql_real_escape_string($_POST['name']); 
$email = mysql_real_escape_string($_POST['email']); 
 
 
//Get MD5 hash of password 
$mypassword = md5($_POST['password']); 
 
 
mysql_query("INSERT INTO $tbl_name (username, email, password) VALUES ( '$username', '$email', '$mypassword')") or die (mysql_error()); 
echo "Account created.";
 
} 
?>

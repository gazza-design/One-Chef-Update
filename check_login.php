<?php
session_start();
include_once('db.php');
$message=array();
if(isset($_POST['uname']) && !empty($_POST['uname'])){
    $uname=mysql_real_escape_string($_POST['uname']);
}else{
    $message[]='Please enter username';
}

if(isset($_POST['password']) && !empty($_POST['password'])){
    $password=mysql_real_escape_string($_POST['password']);
	$password = md5($password);
}else{
    $message[]='Please enter password';
}

$countError=count($message);

if($countError > 0){
     for($i=0;$i<$countError;$i++){
              echo ucwords($message[$i]).'<br/><br/>';
     }
}else{
    $query="select * from users where username='$uname' and password='$password'";

    $res=mysql_query($query);
	$row = mysql_fetch_assoc($res);
    $checkUser=mysql_num_rows($res);
    if($checkUser > 0)
	{     
		
         $_SESSION["user"]=$uname;
		 $_SESSION["user_id"] = $row['ID'];
		 echo 'correct';
		
	}
	else{
         echo 'Incorrect login details';
    }
}
?>

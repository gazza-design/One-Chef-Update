<?php

$host="localhost"; // Host name 

$username="17656_chefplan"; // Mysql username 

$password="system1987"; // Mysql password 

$db_name="17656_chefplan"; // Database name 

$tbl_name="users"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB")

?>
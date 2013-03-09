<?php
include("db.php");

$id = $loginID;
$total = mysql_query("SELECT * FROM receipes WHERE ID = $id");
$ingred_list = mysql_query("SELECT * FROM ingredients");
$receipe_count=mysql_num_rows($total);
$ingred_count=mysql_num_rows($ingred_list);
?>

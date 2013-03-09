<?php
header('Content-Type: image/jpeg');
include("db.php");

$r_ID = $_GET['receipe_ID'];
$rec_view = mysql_query("SELECT receipePhoto FROM receipes WHERE receipeID=$r_ID");
$rec_count=mysql_num_rows($rec_view );

$row_view = mysql_fetch_assoc($rec_view);


echo $row_view['receipePhoto'];


?>
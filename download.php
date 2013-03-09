<?php
 
{
require_once('db.php');

$imageID = ($_GET['id']) ;
$query = mysql_query("SELECT receipePhoto FROM receipes WHERE receipeID=$imageID");

$name = MYSQL_RESULT($query,0,"receipePhoto");


header('Content-Type: image/jpeg');
header("Content-Disposition: attachment; filename=$name");


};
?>
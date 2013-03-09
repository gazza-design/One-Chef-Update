<?php

require_once('db.php');

$imageID = ($_GET['id']) ;
$query = mysql_query("SELECT * FROM receipes WHERE receipeID=$imageID");
$row = mysql_fetch_array($query);
$content =  $row['receipePhoto'];
$name = $row['receipeName'];

header("Content-type:  jpg");
header("Content-type: attachment");
header("Content-Disposition: attachment; filename=$name");
echo $content;
?>


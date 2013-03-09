<?php
require_once("db.php");

$fileName = $_FILES['add_img']['name'];
$recName = $_POST['name'];
$recPrep = $_POST['receipePrep'];
$recCook = $_POST['receipeCook'];
$query = mysql_query("INSERT INTO receipes (ID, receipeName, receipePhoto, receipePrep, receipeCook) VALUES ('$id', '$recName', '$content', '$recPrep','$recCook')");
 echo $_POST['name']."<br />";
  echo $_POST['receipePrep']."<br />";
  echo $_POST['receipeCook']."<br />";
  echo "All Data Submitted Sucessfully!"
?>
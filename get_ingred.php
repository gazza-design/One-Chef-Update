<?php
include("db.php");
$ing_id=$_GET["id"];
$ing_q= mysql_query("SELECT * FROM ingredients WHERE ingrID = '".$ing_id."'");
$ingred_row = mysql_fetch_assoc($ing_q);

$ing_name = $ingred_row['ingrName'];
$i_unit= $ingred_row['ingrUnit'];
$i_price= $ingred_row['ingrPrice'];


echo '
 Name:<span class="info"> '.$ing_name.'</span></br>
Unit:<span class="info">'.$i_unit .'</span></br>
Price: <span class="info">'.$i_price.'</span></br>
Description:<span class="info"> </br>
<textarea name="ing_desc" rows="8" cols="40" disabled="true"></textarea></span></br>';
?>
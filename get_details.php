<?php
include("db.php");
$r=$_GET["id"];
$sql=mysql_query("SELECT * FROM receipes WHERE  receipeID = '".$r."'");
$row = mysql_fetch_array($sql);

$ing_query = mysql_query("SELECT * FROM receipe_ingred WHERE receipe_ID = '".$r."'");
$totalRows = mysql_num_rows($ing_query);

$r_name = $row['receipeName'];
$r_prep = $row['receipePrep'];
$r_cook = $row['receipeCook'];
$r_image = $row['receipePhoto'];
$r_instruct = $row['receipeInstruct'];

$instruct = explode('.',$r_instruct);
$instruct_num = count($instruct);

while ($ing_data = mysql_fetch_array($ing_query))
{
$ing_name[] = $ing_data['rec_ingred'];
$ing_amount[] = $ing_data['ingr_amount'];
$ing_unit[] = $ing_data['rec_Ingr_unit'];
}
?> 
<img src="get_receipe.php?receipe_ID=<?php echo $r; ?>" width="180px" height="120px" />
<div id="left_content">
<table id="r_data">
<thead>
<tr bgcolor="#C96">
<td><font style="font-size:18px; font-weight:bold" > Ingredients:</font></td>
<td></td>
</tr>
</thead>
<tbody>
<?php
for ($i=0; $i<$totalRows; $i++)
{
echo "<tr>";
echo "<td style='text-align:right'> $ing_amount[$i] $ing_unit[$i]</td>";
echo "<td>$ing_name[$i]</td>";
echo "</tr>";
}

?>

</tbody>
</table>
</div>
<div id="right_content">
<table id="right_data">
<thead>
<tr>
<td><b>Prep Time: </b> <?php echo  $r_prep;?> minutes </td>
</tr>
<tr>
<td><b>Cook Time:</b> <?php echo  $r_cook ;?> minutes </td>
</tr>

<tr bgcolor="#C96">
<td><font style="font-size:18px; font-weight:bold" > Directions:</font></td>
</tr>
</thead>
<tbody>
<ul>
<?php
for ($i=0; $i<$instruct_num-1; $i++)
{
	echo "<tr>";
echo "<td><li>$instruct[$i]</li></td>";
echo "</tr>";
}

?>
</ul>
</tbody>


</table>
</div>
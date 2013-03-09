<?php
include("db.php");

$cid=$_GET["catid"];
$data = mysql_query("SELECT * FROM ingredients WHERE catID = '".$cid."'");


?>
<div id="i_list">
<table id="ingred_display">
<thead>
<tr>
<td style="width:200px">NAME</td>
<td style="width:100px">Unit</td>
<td style="width:100px">Price (£)</td>
<td style="width:300px">Description</td>
</tr>
</thead>
<tbody>
<?php
while($ingred_data = mysql_fetch_array($data))
	{
	$inged_name = $ingred_data["ingrName"];
	$inged_unit = $ingred_data["ingrUnit"];
	$inged_price = $ingred_data["ingrPrice"];
	$inged_desc = $ingred_data["ingrDesc"];	
	
	echo "<tr>";
	echo "<td style='width:200px'>$inged_name</td>";
	echo "<td style='width:100px'>$inged_unit</td>";
	echo "<td style='width:100px'>$inged_price</td>";
	echo "<td style='width:300px'>$inged_desc</td>";
	echo "</tr>";
	
	}		
?>
</tbody>
</table>
</div>
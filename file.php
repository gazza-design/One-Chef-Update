<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
  	 $(".rec_update").click(function()
		{
		$("#receipe_sidebar").slideToggle("slow");
		$(this).toggleClass("active"); 
		return false;
	});
	
	
	$("#submit_no").click(function()
	 {
	  var IngredNumber = $("#ingredNo").val();
	
	  for ($i=0; $i<=IngredNumber; $i++)
	{
		var newL = $('<tr><td><input type="text" idd="ing_name"  maxlength="20"/></td><td><input type="text" id="ing_amount" maxlength="4" size="5"/></td></tr>')v
	   $('#ingr_table').append(newL);		 
	 }	
	 });
		
	$('#receipe_list').change(function() 
			{ 
				var url =  $("#receipe_list option:selected").val();
                $('#hiddenid').val(url);
				var link = 'get_details.php?id=' + url;
				$("#receipe").load(link);							
           }); 
	
	
	 
});
</script>



<script type="text/javascript">
function UploadRec() 
{
var Receipename = $("#add_name").val();
var ReceipePrep = $("#add_pTime").val();
var ReceipeCook = $("#add_cTime").val();

$.post("add_receipe.php", { name: Receipename, receipePrep: ReceipePrep, receipeCook: ReceipeCook },
   function(data) 
   {
     alert("Data Loaded: " + data);
   });
}
</script>

<?php
require_once('db.php');
$id = $loginID;
$query_receipes = ("SELECT * FROM receipes WHERE ID =$id");
$rec = mysql_query($query_receipes);
$row_receipes = mysql_fetch_assoc($rec);
$totalRows = mysql_num_rows($rec);
$r_data = mysql_query("SELECT * FROM receipes WHERE ID =$id");


?>
 <div id="receipe_control">
 <div class="item"> 
<a href="#" class="rec_update"> <img src="Images/icons/add.png" height="40" width="40"/ ></a></br>
 </div>
 <div class="item">
  <img src="Images/icons/add.png" height="40" width="40"/ ></br>
 </div>
 <div class="item">
  <img src="Images/icons/add.png" height="40" width="40"/ ></br>
 </div>
 </div>
<div class="receipe_select">
<span id="rec_list"> Receipe List</span>

<?php

	echo '<form action="" method="post">';
  echo '<select size="12" name="list" id="receipe_list">';
  		while($row = mysql_fetch_array($r_data))
	{
	$rID = $row['receipeID'];	
	echo "<option value=".$rID." selected='selected'>".$row['receipeName']."</option>";		
	}      
  echo '</select></br>';
  
echo '</form>';
   ?>
 
   
   </div>
 

<div id="receipe_viewer">
<span class="title"> Receipe Details</span>
<div id="receipe">

<?php
include("get_details.php");
?>
</div>
</div>

<div id="receipe_sidebar">
<form id="add_rec" action="add_receipe.php" method="post" enctype="multipart/form-data">
<span class="info"> Name:</span></br>
<input type="text" maxlength="20" id="add_name"/>
<span class="info"> Prep Time:</span></br>
<input type="text" maxlength="4" id"add_pTime"/>
<span class="info"> Cook Time:</span></br>
<input type="text" maxlength="4" id="add_cTime" />
</form>
<span id="rec_list"> Ingredients:</span></br>
<div id="ingred">
Enter number of ingredients: <input type="text" id="ingredNo" maxlength="4" size="4" /><input type="button" id="submit_no" value="Show" /></br>
<table id="ingr_add">
<thead>
<tr>
<td>
Name
</td>
<td>
Amount
</td>
</tr>
<tbody>


</tbody>
</table>

</div>
</div>


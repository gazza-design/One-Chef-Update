<script src="jquery-1.8.3.min.js"></script>

<script src="js/jquery-ui-1.9.2.custom.js"></script>
<link rel="stylesheet" href="css/smoothness/jquery-ui-1.9.2.custom.css">
<script type="text/javascript">
$(document).ready(function()
{
  //Select first checkbox in receipe list
  $(".rec_check1 input:checkbox").attr("checked", true);
  
  //Load receipe details on page load
    var rec_identify = $('input[type=checkbox]:checked').val();
      var url = rec_identify;
      var link = 'get_details.php?id=' + url;
	  var rec_selected = $(".rec_check1").closest('tr').attr('id');
	  
	  $("#receipe").load(link);
  
  //Get receipe contents on selected checkbox
  $('input[type=checkbox]').change(function() 
  {
	  $(".receipe_list input:checkbox").attr("checked", false);
	  $(this).attr("checked", true);
	  var rec_identify = $('input[type=checkbox]:checked').val();
      var url = rec_identify;
      var link = 'get_details.php?id=' + url;
	  var rec_selected = $(this).closest('tr').attr('id');
	  $("#receipe").load(link);
  });
  
   $("#down_link").click(function() 
  {
   var link_id = $('input#select_id').val();
   $("#down_link").attr("onclick", document.location.href='download_receipe.php?id='+link_id);
	  
  });
	 
});
</script>

<?php
require_once('db.php');
$id = $loginID;
$query_receipes = ("SELECT * FROM receipes WHERE ID =$id");
$rec = mysql_query($query_receipes);
$totalRows = mysql_num_rows($rec);
while ($row_receipes = mysql_fetch_assoc($rec))
{

$list_rName[] = $row_receipes['receipeName'];
$list_rID[] = $row_receipes['receipeID'];
$list_rPrep[] = $row_receipes['receipePrep'];
$list_rCook[] = $row_receipes['receipeCook'];
}

?>
<div class="receipe_select">
<span id="rec_list"> Receipe List</span>
<table class="receipe_list">
<tbody>

<?php
for ($i=0; $i<$totalRows; $i++)
{
echo "<tr id='$list_rName[$i]'>";
echo "<td>$list_rName[$i]<p class='rec_row'>Prep Time: $list_rPrep[$i] mins </br> Cook Time: $list_rCook[$i] mins</p></td>";
echo "<td class='rec_check$list_rID[$i]'><input type='checkbox' class='list_check'  value='$list_rID[$i]'/></td>";
echo "</tr>";
}
?>
</tbody>
</table> 
<input type="hidden" id="select_id"/>
</div>


<div id="receipe_viewer">


<div id="receipe">
<?php

include ("get_details.php");
?>
</div>

<div id="control_widget">
<button id="opener" >open the dialog</button>
</div>
</div>
<div id="search_sidebar">
<span id="rec_list"><font style="font-size:14px; font-family:Verdana, Geneva, sans-serif">RECEIPE SEARCH</font></span>
<div id="search_box">
<form>
<span id="search_text"> Search: <input type="search" id="search_identifier" /><input  type="submit" id="submit_search" value="GO" /></span>

</form>
</div>
<div id="search_results">
<span id="rec_list"><font style="font-size:14px; font-family:Verdana, Geneva, sans-serif">Results</font></span>

</div>
</div>
<div id="add_dialog" title="Add Receipe">
<form>


</form>
</div>
<script>
$( "#add_dialog" ).dialog({ autoOpen: false });
$( "#add_dialog" ).dialog({ resizable: false });
$( "#add_dialog" ).dialog({ draggable: false });

$( "#opener" ).click(function() 
{
  $("#add_dialog").dialog("open");
});
</script>

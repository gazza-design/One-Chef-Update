<?php
require_once('db.php');
?>

<script type="text/javascript"> 
         $(document).ready(function(){ 
            $(".cat_detail").click(function() 
			{ 
				
                var image_id = (this).id;
				var catname = (this).name;
				var ingred_link = 'get_cat_ingred.php?catid=' + image_id;
				$(".cat_title").text("Ingredients " + catname);
				$("#i_list").load(ingred_link);	
										
           }); 
        });
</script>

<div id="category_list">
<span id="rec_list"> Categories</span>

<?php
$cat_query = mysql_query("SELECT * FROM categories");
while ($cat_data = mysql_fetch_array($cat_query))
{
	$catID = $cat_data['categoryID'];
	$catName= $cat_data['categoryName'];
	$catIcon = $cat_data['category_icon'];

	
	
	?>
    <div class="item">
	<a href="#" class="cat_detail" id="<?php echo $catID;?>" name="<?php echo $catName;?>">
	<img src="Images/icons/<?php echo $catIcon;?>.png"/>
	</a>    
	</div>
<?php	
}
?>



</div>



<div id="ingred_viewer">
<span class="cat_title">Ingredient</span>
<?php
include("get_cat_ingred.php");


?>
</div>






<?php
session_start();

$login_check=$_SESSION['user'];
$loginID = $_SESSION['user_id'];
if(!isset($login_check))
{
header("Location: index.php");
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>OneChef Kitchen Manager</title>
<link rel="stylesheet" href="main_style.css" type="text/css"  />
<script type="text/javascript" src="jquery-1.8.2.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {
$(".register_tab").hide();
$("#info_sidebar").hide();	
	$(".tab_content").hide();
	$(".tab_content:first").show(); 

	$("#navigation ul.tabs li").click(function() {
		$("#navigation ul.tabs li").removeClass("active");
		$(this).addClass("active");
		$(".tab_content").hide();
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab).fadeIn(); 
	});
});

</script> 


</head>

<body>

<header>
	<div id="logo"> 
	<img src="Images/site_logo.png" /><h1>OneChef</h1>
    </div>
	
    <div id="user_container">
        <span class="user">
		<?php
		echo $login_check;
		?>
		</span>
		<span class="user">Profile</span>
		<span style="padding-left:5px;"><a href="logout.php">Log Out</a></span>
    </div> 
    
</header>

<div id="navigation">
    <ul class="tabs"> 
        <li class="active" rel="Home"> Home</li>
        <li rel="tab2"> Receipes</li>
        <li rel="tab3"> Ingredients</li>
        <li rel="tab4"> Cooking Tips</li>
        <li rel="tab5"> Shopping</li>
        <li rel="tab6"> Planner</li>
    </ul>
    </div>

<div class="main_content">
	
    <div class="tab_container"> 
		 <div id="breadcrumb">
			<ul id="crumb_list">
            	<li class="crumb_link"><img src="Images/icons/home_icon.png" width="20px"  height="20px"/>  </li>            
                </ul>
 		</div>	
		<div id="Home" class="tab_content">
       
 		<?php
		include("user_homepage.php");
		
		?>  
       
		</div>

    	<div id="tab2" class="tab_content"> 
			<?php
		include("user_receipe.php");
		
		?>  
    

     </div>
     <div id="tab3" class="tab_content"> 
		
     		<?php
		include("user_ingred.php");
		
		?>  

     </div>
     
     <div id="tab4" class="tab_content"> 
		<?php
		include("tips.php");
		
		?> 
     
     </div>
     

        <div id="tab5" class="tab_content"> 
		<h3>Shopping</h3>
     
     </div>
       
     
        <div id="tab6" class="tab_content"> 
		<h3>Planner</h3>
     
     </div>
     
     
     
</div> 
 
</div>
 <footer>
 
 </footer>
    
    

</body>
</html>

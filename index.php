<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>OneChef Kitchen Manager</title>
<link rel="stylesheet" href="style.css" type="text/css"  />
<script type="text/javascript" src="jquery-1.8.2.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {

		
	$(".landing_content").hide();
	$(".landing_content:first").show(); 
	$("#register").hide();
	$("#nav_bar ul.landing_tabs li").click(function() {
		$("#nav_bar ul.landing_tabs li").removeClass("active");
		$(this).addClass("active");
		$(".landing_content").hide();
		$("#register").hide();
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab).fadeIn(); 
	});
});

</script>
</head>

<body>
<header>
	<div id="logo"> 
	<img src="Images/site_logo.png" /><h1>OneChef</h1><span class="header_title"></span>
	
    
</header>
<div id="nav_bar">
	<ul class="landing_tabs">
	<li class="active" rel="login">Customer Login</li>
	<li rel="register"> Register</li>
	</ul>

</div>
<div class="landing_main_container">

	<div id="login" class="landing_content">
	<div class="form">
           	<h2 >Login</h2>
            <form id="login_data" name="login_data"  action="check_login.php" method="post" style="margin-left:40px;">
            <span class="form_input">Username:<input type="text" name="username"  id="username" style="margin-left:20px;"/></span>
              <span class="form_input">Password:<input type="password" name="password"  style="margin-left:20px;"/></span>
              <span class="form_input" style="margin-left:50px;"><input type="submit" name="login_button" value="Login" id="login_button" /> </span>        
            </form>
                  	
            
            <img src="Images/fresh-vegatables.jpeg" class="form_img"/>
       
            </div>
       
    </div>
	
	
	<div id="register" class="landing content">
	    
	    <div class="form">
        	<h2 >Register</h2>
            <form action="register.php" method="post" style="margin-left:40px;">
            <span class="form_input">Enter your name:<input type="text" name="name" style="margin-left:45px;"/></span>
            <span class="form_input">Enter your email:<input type="text" name="email"  style="margin-left:45px;" /></span>
         <span class="form_input">Enter your password:<input type="password" name="password"  style="margin-left:20px;"/></span>
            <span class="form_input" style="margin-left:50px;"><input type="submit" value="Register with OneChef" /> </span>        
            </form>
            <img src="Images/fresh-vegatables.jpeg" class="form_img"/>
	</div>
	</div>
	

</div>
<footer>

<div id="footer_container">

<ul class="footer_links">
<li>Tel: 07800545348</li>
<li>Email: gazzadesigner@gmail.com</li>
<li><img src="Images/f_logo.png" height="25px"  style="margin-right:10px"/><img src="Images/twit_logo.png" height="25px"/></li>
<li>Terms and Conditions </li>
<li>Privacy Policy</li>
<li> &copy; Copyright of Gareth Drew</li>
</ul>



</div>
</footer>
</body>
</html>


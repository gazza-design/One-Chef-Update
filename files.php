<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>File Directory</title>
<link href="style_dir.css" rel="stylesheet" type="text/css" />
		<script src="jquery-1.8.2.min.js" type="text/javascript"></script>
		
		<script src="jqueryFileTree.js" type="text/javascript"></script>
		

<script type="text/javascript">
$(document).ready( function() 
	{
		
	$('#local_dir').fileTree({ root: '/Users/Designer/Dropbox/', script: 'connectors/jqueryFileTree.php' }, function(file) {
     	openFile(file);   
    });
    $('#remote_dir').fileTree({ root: '/', script: 'connectors/jqueryFileTree_remote.php' }, function(file) {
        openFile(file);  
    });
	
	function openFile(file) 
	{
    	 window.open(file);
    }
});
</script>
</head>

<body>
<header>

</header>
<div id="folders">
	<span class="dir_header">Local Files </span>
    <span class="dir_header"> Remote Files</span>
	<div id="local_dir" class="file_tree">
    
    </div>
    
    <div id="remote_dir" class="file_tree">
    
    
    </div>


</div>
<footer>

</footer>
</body>
</html>
<?php session_start(); ?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

    
<?php
	
	if (!empty($_SESSION['uid'])){
		echo 'Logged in as user '.$_SESSION['un'];
		echo '<br> secret info';
        
	}
	else {
		echo 'Not logged in...';
	}
	
?>
    
 <p>ftbht</p>   
    
</body>
</html>
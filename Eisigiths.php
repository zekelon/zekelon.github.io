
<?php
// Start the session
session_start();
?>
<!DOCTYPE html >
<html>
<head>
<meta charset='utf-8'> 
 <title>Login page </title>
 <link rel="stylesheet" type="text/css" href="styleEisigiths.css">
 </head>
<body>
	
<div id="frm">
    <p1 style="text-align:center;">  Mr.<?php echo"".$_SESSION['username'] ?> </p1>  
	<form method="get" action="eisagwgherwthsewn.php">
	<button type="submit" id="btn">Question create</button>
	</form>
 	<form method="get" action="viewquestions.php">
	<button type="submit" id="btn">View Created Questions</button>
	</form>
	<form method="get" action="Logout.php">
	<button type="submit" id="btn">Logout</button>
	</form>
 </div>
			
 </body>
</html>

   
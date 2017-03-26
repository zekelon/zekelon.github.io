<!DOCTYPE html >
<?php
// Start the session
session_start();
?>
<html>
<head>
<meta charset='utf-8'> 
 <title>Login page </title>
 <link rel="stylesheet" type="text/css" href="styleElexths.css">
 </head>
<body>
 
  <h1 style="text-align:center;"></h1>
        <div id="frm">
		
			<p style="text-align:left;">Welcome Mr.<?php echo"".$_SESSION['username'] ?>  </p>
			<form method="get" action="elegxos2.php">
			<button type="submit" id="btnb">Check New Questions</button>
			</form>
			<form method="get" action="viewaquestions.php">
			<button type="submit" id="btnb">View Appr.Questions</button>
			</form>
			<form method="get" action="Test2.php">
			<button type="submit" id="btnb">Activate/Stop Tests</button>
			</form>
		
		
	
   
	
 </form>
			<form method="get" action="Logout.php">
			<button type="submit" id="btnb">Go back</button>
			</form>
 </div>
 </body>
</html>

  
   
  
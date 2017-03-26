<!DOCTYPE html >
<?php
// Start the session
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styleKathigiths.css">
</head>
<body>
 
			<div id="frm">
            <p style="text-align:left;">Welcome Mr.<?php echo"".$_SESSION['username'] ?> <br> What you want to do? </p>
			<form method="get" action="testcreate.php">
			<button type="submit" id="btnb">Test Create</button>
			</form>
			<form method="get" action="randomtest.php">
			<button type="submit" id="btnb" style="color: teal; background-color: #FFFFC0;">Random Test</button>
			</form>
			<form method="get" action="viewtests.php">
			<button type="submit" id="btnb">View Tests</button>
			</form>
			<form method="get" action="Test2Kathigiths.php">
			<button type="submit" id="btnb">Activate/Stop Your Tests</button>
			</form>
	</fieldset>
	<form align="right" name="form1" method="post" action="Logout.php">
	<label class="logoutLblPos">
	<input name="submit2" type="submit" id="submit2" value="Log out">
	</label>
</form>
	
 </div>
 
 
 </body>
</html>
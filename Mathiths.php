<!DOCTYPE html >
<?php
// Start the session
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styleMathiths.css">
</head>
<body>
<form action="epiloghmathith.php" method="POST">
 
   <h1 style="text-align:center;">Welcome Student.<?php echo"".$_SESSION['username'] ?> <br> What you want to do? </h1>
  <div id="frm">
  
  <input type="radio" name="Epilogh" value="Test">Test
	<br>
 	<input type="radio" name="Epilogh" value="Stoixeia">See my informations and grades
	<br>
	<input type="radio" name="Epilogh" value="Notifications">See Notifications
	<br>
	<input type="submit" id="Tinakanei" value="Submit" />
	
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

   
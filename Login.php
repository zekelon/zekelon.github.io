<!DOCTYPE html >
<?php
// Start the session
session_start();
?>
<html>
<head>
<style>
	table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	}
</style>
<meta charset='utf-8'> 
 <title>Login page </title>
 <link rel="stylesheet" type="text/css" href="styleLogin.css">
 </head>
 <body>
  <div id="frm">
   <form action="process.php" method="POST">
    <p>
	<label> Username:</label>
	<input type="text" id="user" name="user" required />
	</p>
	<p>
	<label> Password:</label>
	<input type="password" id="pass" name="pass" required />
	<img src="eye.png" width="20" height="20" onmouseover="mouseoverPass();" onmouseout="mouseoutPass();" />
	</p>
	<p>
	<label> UserRights </label>
	<br>
    <input type="radio" name="Rights" value="Eisigiths" required >Eisigiths&nbsp;&nbsp;          
 	<input type="radio" name="Rights" value="Kathigiths">Kathigiths
	<br>
	<input type="radio" name="Rights" value="Elexths">Elexths&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" name="Rights" value="Mathiths">Mathiths
    </p>
	<style>
	</style>
	<input type="submit" id="btn" value="Login" />
    </form>
    <form method="get" action="register.php">
    <button type="submit" id="btn">Register</button>
	</form>
	<form align="right" method="get" action="statistics.php">
	<button type="submit" id="btn">Statistics</button>
	</form>
	<form align="right"  method="get" action="help.php">
	<button type="submit" style="background-color: " id="btn">Accounts</button>
	</form>
	<table align="left">
	<tfoot>
			<tr>
            <td colspan="13"><font color="blue">&#169;Compiled in 2016-2017<br>By B.Michail Corporation      </font></td>
			</tr>
			</tfoot>  
			</table>
 </body>
 </html>
 <script>
 function mouseoverPass(obj) {
  var obj = document.getElementById('pass');
  obj.type = "text";
}
function mouseoutPass(obj) {
  var obj = document.getElementById('pass');
  obj.type = "password";
}
 </script>
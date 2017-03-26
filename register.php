<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
	  <title> Welcome to the Quiz Selection <br> Please Select Category<br> Good Luck </title>
	  <link rel="stylesheet" type="text/css" href="styleSchool.css">
</head>
<body>
<div id="container">
   <h1 style="text-align:center;"></h1>
   <form action="formaegrafhs.php" method="POST">

  <div id="frm">
  <p><strong>Welcome Visitor <br>Please complete the form</strong></p>
    <p>
	<label> Username:</label>
	<input  type="text" id="username" name="username" required />
	</p>
	<p>
	<label> Password:</label>
	<input type="password" id="password" name="password" required />
	<img src="eye.png" width="20" height="20" onmouseover="mouseoverPass();" onmouseout="mouseoutPass();" />
	</p>
	<p>
	<label> Name:</label>
	<input type="text" id="onoma" name="onoma" required />
	</p>
	<p>
	<label> Surname:</label>
	<input type="text" id="epitheto" name="epitheto" required />
	</p>
	<p>
	<label> City:</label>
	<select name="polh" required>
	<option disabled selected value> -- select an option -- </option>
	<option value="Athens">Athens</option>
    <option value="Aliveri">Aliveri</option>
	<option value="Kymh">Kymh</option>
	<option value="Lamia">Lamia</option>
    <option value="Tripolh">Tripolh</option>
	<option value="Sparth">Sparta</option>
    <option value="Ermoypolh">Ermoypolh(Syros)</option>
	<option value="Thessalonikh">Thessalonikis</option>
	<option value="Ermoypolh">Ermoypolh(Syros)</option>
	<option value="Naksos">Naksos</option>
	<option value="Andros">Andros</option>
	<option value="Tinos">Tinos</option>
	<option value="Mykonos">Mykonos</option>
	<option value="Xaldika">Xaldika</option>
	</select>
	</p>
	<p>
	<label> Nomos:</label>
	<select name="nomos" required>
	<option disabled selected value> -- select an option -- </option>
	<option value="Attikhs">Attikhs</option>
    <option value="Arkadias">Arkadias</option>
    <option value="Eyboias">Eyboias</option>
	<option value="Kykladon">Kykladon</option>
	<option value="Lakonias">Lakonias</option>
	<option value="Thessalonikhs">Thessalonikhs</option>
	<option value="Fthiotidas">Fthiotidas</option>
	</select>
	</p>
	<p>
	<label> Class(1-2-3-4-5-6):</label>
	<select name="taksh" required>
	<option disabled selected value> -- select an option -- </option>
    <option value="1">1</option>
    <option value="2">2</option>
	<option value="3">3</option>
    <option value="4">4</option>
	<option value="5">5</option>
    <option value="6">6</option>
	</select>
	</p>
	<p>
	<label> Tmhma:</label>
	<select name="tmhma" required>
	<option disabled selected value> -- select an option -- </option>
	<option value="Bussiness">Bussiness</option>
    <option value="Georgraphy">Geography</option>
    <option value="General Knowledge">General Knowledge</option>
	<option value="Hystory">History</option>
	<option value="Programming">Programming</option>
	<option value="Mathimatics">Mathimatics</option>
	<option value="Mythology">Mythology</option>
	</select>
	</p>
	<p>
	<label> Sxolikh Monada:</label>
	<select name="sm">
	<option disabled selected value> -- select an option -- </option>
    <option value="Lamias">Lamia's</option>
    <option value="Thessalonikhs">Thessalonikh's</option>
    <option value="Athhnas">Athen's</option>
	<option value="Cretes">Crete's</option>
	</select>
	</p>
	<input type="submit" id="btn" value="Submit!">
	</form>
	<form method="get" action="Login.php">
	<button type="submit" id="btn">Back</button>
	</form>
   </div>
   </body>
   </html>
   <script>
 function mouseoverPass(obj) {
  var obj = document.getElementById('password');
  obj.type = "text";
}
function mouseoutPass(obj) {
  var obj = document.getElementById('password');
  obj.type = "password";
}
 </script>
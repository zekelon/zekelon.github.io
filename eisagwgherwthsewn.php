<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
	  <title> Welcome to the Quiz Selection <br> Please Select Category<br> Good Luck </title>
	  <link rel="stylesheet" type="text/css" href="styleE.css">
</head>
<body>
   <form action="formaeisagwghs.php" method="POST">

  <div id="frm">
   <form action="process.php" method="POST">
    <p>
	<textarea id="q" name="question" rows="4" cols="40">Enter your queststion here...</textarea>
	</p>
	<p>
	<label> Choice1:</label>
	<input type="text" id="choice1" name="choice1" />
	</p>
	<p>
	<label> Choice2:</label>
	<input type="text" id="choice2" name="choice2" />
	</p>
	<p>
	<label> Choice3:</label>
	<input type="text" id="choice3" name="choice3" />
	</p>
	<p>
	<label> Answer:</label>
	<input type="text" id="answer" name="answer" />
	</p>
	<p>
	<label> Difficulty level(1-10):</label>
	<select name="bathmos_d" required />
	<option disabled selected value> -- select an option -- </option>
	<option value="1">1</option>
    <option value="2">2</option>
	<option value="3">3</option>
    <option value="4">4</option>
	<option value="5">5</option>
    <option value="6">6</option>
	<option value="7">7</option>
    <option value="8">8</option>
	<option value="9">9</option>
    <option value="10">10</option>
	</select>
	</p>
	<p>
	<label> Class(1-2-3-4-5-6):</label>
	<select name="takseis" required>
	<option disabled selected value> -- select an option -- </option>
    <option value="1">1</option>
    <option value="2">2</option>
	<option value="3">3</option>
    <option value="4">4</option>
	<option value="5">5</option>
    <option value="6">6</option>
	<option value="7">1-2</option>
    <option value="8">1-3</option>
	<option value="9">1-4</option>
    <option value="10">1-5</option>
	<option value="11">1-6</option>
    <option value="12">2-3</option>
    <option value="13">2-4</option>
	<option value="14">2-5</option>
    <option value="15">2-6</option>
	<option value="16">3-4</option>
    <option value="17">3-5</option>
	<option value="18">3-6</option>
    <option value="19">4-5</option>
	<option value="20">4-6</option>
    <option value="21">5-6</option>
	</select>
	</p>
	<input type="submit" value="Submit!">
	</form>
	<form method="get" action="Eisigiths.php">
	<button type="submit" id="btn">Go Back</button>
	</form>
   
   
   </div>
   </body>
   </html>
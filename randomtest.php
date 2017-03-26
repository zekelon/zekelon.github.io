<?php session_start() ?>
<!DOCTYPE html>
	<html lang="en">
	<head>
      <meta charset="utf-8">
	  <title> Welcome to the Quiz Selection <br> Please Select Category<br> Good Luck </title>
	  <link rel="stylesheet" type="text/css" href="styleStats.css">
	  <style>
	  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	}
	.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: DarkGoldenRod;
}
	  </style>
	</head>
	<body>
	<h1 style="text-align:center;"></h1>
	<div id="frm1">
	<p><strong>Welcome to the Test Creation <br> Those are the verifaid questions to use on the test <br> Choose Wisely </strong> <br> <br></p> 
	
	<form action="rtestcreation.php" method="POST">
 
	  <?php
			//Defines
			define('DB_SERVER', 'localhost');
			define('DB_USERNAME', 'root');
			define('DB_PASSWORD', '');
			define('DB_DATABASE', 'Login');
			$aq=0;
			$en=1;
			$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
			//Search in the database
			$result = mysqli_query($link,"select * from questions WHERE egkekrimenh='yes' AND testname=''") or die("Unable to query database Spiti soy".mysqli_error());
			if (mysqli_num_rows($result) > 0)
		    {
			?>
			<?php
			while($row = mysqli_fetch_array($result)) {
		     ?>
			 <?php $aq++; $en++; ?>
			 <?php } } ?>
			</table>
			
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
			<select name="sm" required>
			<option disabled selected value> -- select an option -- </option>
			<option value="Lamias">Lamia's</option>
			<option value="Thessalonikhs">Thessalonikh's</option>
			<option value="Athhnas">Athen's</option>
			<option value="Cretes">Crete's</option>
			</select>
			</p>
			<p>
			<label> Test Name:</label>
			<input type="text" id="testname" name="testname" />
			</p>
			<label> Difficulty:</label>
			<select name="difficulty" required>
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
			<br>
			<label> Suggested Class:</label>
			<select name="sc" required>
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
			<p> Questions Availiable:<u><strong><font color="blue"><?=$aq?></font></strong></u></p>
			<label> Questions Number:</label>
			<select name="qn" required>
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
			<br>
			<button type="submit" id="btnb" style="color: teal; background-color: #FFFFC0;" >Random Q.</button>
			</form>
            <form method="get" action="Kathigiths.php">
			<button type="submit" id="btnb">Go back</button>
			</form>
   
   
   </div>
   </body>
   </html>
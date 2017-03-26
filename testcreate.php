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
	
	<form action="testcreation.php" method="POST">
 
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
			?><table>
			<tr>
             <th> <u> <strong>Question </strong> </u></th>
			 <th> Quest.Id </th>
			 <th>Bathmos Dyskolias</th>
			 <th>Takseis</th>
			 <th>Epiloges</th>
			 <th>Apanthsh:</th>
			 <th>Eisigiths</th>
			 <th>Choose it?<th>
			 </tr>
			 <tr><?php
			while($row = mysqli_fetch_array($result)) {
		     ?>
			 
	
			 <td><?=$en?>.<?=$row["question"]?></td>
			<td><u><strong><center><font color=""><?=$row["quizID"]?></font></center></strong></u></td>
			 <td><u><strong><center><font color=""><?=$row["bathmos_d"]?></font></center></strong></u></td>
			<td><u><strong><center><font color=""><?=$row["takseis"]?></font></center></strong></u></td>
			 <td>1.<?=$row["choice1"]?><br>
			     2.<?=$row["choice2"]?><br>
			     3.<?=$row["choice3"]?></br>
				 4.<?=$row["answer"]?></td>
			<td><u><strong><center><font color="green"><?=$row["answer"]?></font></center></strong></u></td>
			 <td><?=$row["eisigiths"]?></td>
			 <td>Yes<input type="radio" name=<?=$row["quizID"]?> value="Yes">
				 No<input type="radio" name=<?=$row["quizID"]?> value="No" checked="checked">
		     </td>		 
			 </tr>
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
			<input type="submit" value="Submit!">
			</form>
            <form method="get" action="Kathigiths.php">
			<button type="submit" id="btnb">Go back</button>
			</form>
   
   
   </div>
   </body>
   </html>
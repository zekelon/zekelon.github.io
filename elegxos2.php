<?php
session_start();
 ?>
 
 
<html lang="en">
<head>
    <meta charset="utf-8">
	<title> TestName </title>
	<style>
	table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	}
	</style>
	<link rel="stylesheet" type="text/css" href="styleZekes3.css">
	</head>
	<body style="background-color:Sienna">
	<div id="container">
	<h1>Welcome to the Question Aprove: <br> <br> <br> </h1>
	<table>
	<tr>
	<th bgcolor="SeaGreen">No(ID).Question</th>
	<th bgcolor="SeaGreen">Choices</th>
	<th bgcolor="SeaGreen">Answer</th>
	<th bgcolor="seagreen">You aprove?</th>
	</tr>
	<tr>
	<form action="egkrish.php" method="POST">
		<?php
		$nu=0;
		//Defines
		define('DB_SERVER', 'localhost');
		define('DB_USERNAME', 'root');
		define('DB_PASSWORD', '');
		define('DB_DATABASE', 'Login');
		$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
        $result = mysqli_query($link,"select * from questions WHERE egkekrimenh!='yes'") or die("Unable to query database Spiti soy".mysqli_error($link));
		//Search in the database
		
		if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_array($result)) { $nu++ ?>
       
		<?php $ans_array = array($row["choice1"], $row["choice2"], $row["choice3"], $row["answer"]);
		shuffle($ans_array); ?>
		<td bgcolor="#FFF8DC"><?=$nu?>.(<?=$row["quizID"]?>)<?=$row["question"]?></td>
		<td bgcolor="#FFF8DC"><u> 1.<?=$ans_array[0]?><br><br>
		                          2.<?=$ans_array[1]?><br><br>	
		                          3.<?=$ans_array[2]?><br><br>
		                          4.<?=$ans_array[3]?><br><br>
						     </u>		  
		</td>
		<td bgcolor="#FFF8DC">
		  <?=$row["answer"]?>
		</td>
		<td bgcolor="#FFF8DC">
		<input type="radio" name=<?=$row["quizID"]?> value="Yes">Yes<br>
		<input type="radio" name=<?=$row["quizID"]?> value="No">No<br>
		<input type="radio" name=<?=$row["quizID"]?> value="" checked="checked">Don't Know<br>
		</td>
		</tr>
    
		<?php } } else  {echo "0 results";} ?>
    
    <br><br>
	</table>
    <input type="submit" value="Submit!"> 
	</form>
	<form method="get" action="elexths.php">
	<button  class="button button1"  type="submit">Go Back</button>
	</form>
	</form>
   
   
   </div>
   </body>
   </html> 
 
<?php
session_start();
$category = $_POST['testname'];
$_SESSION['testname'] = $_POST['testname'];
$testname=$_SESSION['testname'];
if ($category == 'General_Knowledge')  header ('Location: /solo/General_Knowledge.php');
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
	<link rel="stylesheet" type="text/css" href="styleZekes1.css">
	</head>
	<body style="background-color:Sienna">
	<div id="container">
	<h1><font color="yellowgreen">Good luck</font></h1>
	<table>
	<tr>
	<th bgcolor="SeaGreen">Question</th>
	<th bgcolor="SeaGreen">Choices</th>
	</tr>
	<tr>
	<form action="result_display3.php" method="POST">
		<?php
		
		//Defines
		define('DB_SERVER', 'localhost');
		define('DB_USERNAME', 'root');
		define('DB_PASSWORD', '');
		define('DB_DATABASE', 'Login');
		$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
        $result = mysqli_query($link,"select * from questions WHERE testname='$testname'") or die("Unable to query database Spiti soy".mysqli_error());
		//Search in the database
		$nu=0;
		if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_array($result)) { $nu++?>
        
		<?php $ans_array = array($row["choice1"], $row["choice2"], $row["choice3"], $row["answer"]);
		shuffle($ans_array); ?>
		<td bgcolor="#FFF8DC"><?=$nu?>.<?=$row["question"]?></td>
		<td bgcolor="#FFF8DC">    <input type="radio" name=<?=$row["quizID"]?> value="<?=$ans_array[0]?>" required> <?=$ans_array[0]?><br>
		<input type="radio" name=<?=$row["quizID"]?> value="<?=$ans_array[1]?>"> <?=$ans_array[1]?><br>
		<input type="radio" name=<?=$row["quizID"]?> value="<?=$ans_array[2]?>"> <?=$ans_array[2]?><br>
		<input type="radio" name=<?=$row["quizID"]?> value="<?=$ans_array[3]?>"> <?=$ans_array[3]?><br>
		</td>
		</tr>
    
		<?php } } else  {echo "0 results";} ?>
    
    <br><br>
	</table>
    <input type="submit" value="Submit!">
    

	</form>
   
   
   </div>
   </body>
   </html> 
 
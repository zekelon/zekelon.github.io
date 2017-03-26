<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Play Geography Quiz</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
	u { 
    text-decoration: underline;
     }
	 w{ }
</style>

</head>
<body>

	
	<h1>Welcome to the Quiz Selection <br> Please Select Category<br> Good Luck </h1>
	        <?php
			$username=$_SESSION['username'];
			$password=$_SESSION['password'];
			$userscore=0;
		
			//Defines
			define('DB_SERVER', 'localhost');
			define('DB_USERNAME', 'root');
			define('DB_PASSWORD', '');
			define('DB_DATABASE', 'Login');
			$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
			//Search in the database
			$result = mysqli_query($link,"select * from quiz") or die("Unable to query database Spiti soy".mysqli_error());
			if (mysqli_num_rows($result) > 0) {
			// output data of each row
			?>
			<div id="container">
	        <?php 
			while($row = mysqli_fetch_array($result)) {

				if ($_POST[$row["quizID"]]==$row["answer"])
				{
				    $userscore+=10;
			?>
					
					<p>Question No.<?=$row["quizID"]?>:<?=$row["question"]?><br>You Entered correct:</p>
					<p style="color:Blue;"><?=$_POST[$row["quizID"]]?> &#9989;</p>
			<?php		
				}
				else
				{
					?><p>Question No.<?=$row["quizID"]?>:<u><?=$row["question"]?></u></p>
					  <p>You Entered wrong:<w style="color:red"><?=$_POST[$row["quizID"]]?>&#10006</w></p>
					  <p>Right Answer is: <w style="color:Green;"><?=$row["answer"]?>&#10004;</w></p>
					  
				<?php }
			
			}
			$result = mysqli_query($link,"select score,id from users where username = '$username' and password = '$password'") or die("Unable to query database Spiti soy".mysqli_error());
			$row = mysqli_fetch_array($result);
			$newscore= ($row['score']+ $userscore)/2;
			$id=$row['id'];
			echo ("Your previous score was:").$row['score'];echo"Your new score is:".$newscore;
			$sql = "UPDATE users SET score=$newscore WHERE id=$id";
			if ($link->query($sql) === TRUE) {
			echo "Record updated successfully";
			} else {
			echo "Error updating record: " . $link->error;
			}			
			}
			?>
			</div>

</body>
</html>
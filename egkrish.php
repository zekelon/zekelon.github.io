<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Play Geography Quiz</title>
	<link rel="stylesheet" type="text/css" href="styleEgkrish.css">
<style>
</style>

</head>
<body>

	
	<h1>You aprovved the following questions <br></h1>
	        <?php
			$username=$_SESSION['username'];
			$password=$_SESSION['password'];
			//Defines
			define('DB_SERVER', 'localhost');
			define('DB_USERNAME', 'root');
			define('DB_PASSWORD', '');
			define('DB_DATABASE', 'Login');
			$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
			//Search in the database
			$result = mysqli_query($link,"select * from questions WHERE egkekrimenh!='yes'") or die("Unable to query database Spiti soy".mysqli_error());
			if (mysqli_num_rows($result) > 0)
		{
			// output data of each row
			?>
			<div id="frm">
	        <?php 
			while($row = mysqli_fetch_array($result))
			{

				if ($_POST[$row['quizID']]=='Yes')
				{
					$id=$row["quizID"];
					$sql = "UPDATE questions SET egkekrimenh='yes' WHERE quizID=$id";
					if (mysqli_query($link, $sql)) {
					
					} else {
					echo "Error updating record: " . mysqli_error($link);
					}
				  
			?>	
					<p>Question No.<?=$id?>:<?=$row["question"]?><br>Egkrithke:&#9989;</p>
					
					
			<?php		
				}
				else if($_POST[$row['quizID']]=='No')
				{
					$id=$row["quizID"];
					$sql = "DELETE FROM questions WHERE quizID=$id";
					if (mysqli_query($link, $sql)) {
					echo "Record updated successfully";
					} else {
					echo "Error updating record: " . mysqli_error($link);
					}
					?><p>Question No.<?=$row["quizID"]?>:<u><?=$row["question"]?></u></p>
					  <p>Aporhfthike:&#10006;<?=$row["quizID"]?> </p>
					 
					  
				<?php
				}
				else{}
			}
		}			
			?>
			<form method="get" action="elexths.php">
			<button type="submit" id="btnb">Go back</button>
			</form>
			</div>
			
			

</body>
</html>
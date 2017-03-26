<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Play Geography Quiz</title>
	<link rel="stylesheet" type="text/css" href="styleE.css">
<style>
</style>

</head>
<body>

	
	<h1 style="text-align:center;"></h1>
	        <?php
			$q=$_POST['question'];
			$c1=$_POST['choice1'];
			$c2=$_POST['choice2'];
			$c3=$_POST['choice3'];
			$a=$_POST['answer'];
			$bd=$_POST['bathmos_d'];
			$t=$_POST['takseis'];
			$e=$_SESSION['username'];
		
			//Defines
			define('DB_SERVER', 'localhost');
			define('DB_USERNAME', 'root');
			define('DB_PASSWORD', '');
			define('DB_DATABASE', 'Login');
			$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
			$sql = "INSERT INTO questions (question, choice1, choice2,choice3,answer,Bathmos_d,takseis,eisigiths)
				VALUES ('$q' , '$c1', '$c2','$c3','$a','$bd','$t','$e')";

					if (mysqli_query($link, $sql)) {
					echo "ola good";
					} else {
					echo "Error:Proekhpse kapoio sfalma h erwthsh den kataxwrh8hke sto arxeio " . $sql . "<br>" . mysqli_error($link);
					}
   
			?>
			<div id="frm">
			<p><u>The quetion has been saved to the record pending certification by our Controllers thanks for your time</u></p>
			<form method="get" action="Eisigiths.php">
			<button type="submit" id="btnb">Go back</button>
			</form>
			<form method="get" action="Logout.php">
			<button type="submit" id="btnb">Logout</button>

</body>
</html>
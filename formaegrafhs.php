<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Play Geography Quiz</title>
	<link rel="stylesheet" type="text/css" href="styleSchool.css">
<style>
</style>

</head>
<body>

	
	<h1 style="text-align:center;"> </h1>
	<div id="frm">
	        <?php
			$username=$_POST['username'];
			$password=$_POST['password'];
			$onoma=$_POST['onoma'];
			$epitheto=$_POST['epitheto'];
			$polh=$_POST['polh'];
			$nomos=$_POST['nomos'];
			$taksh=$_POST['taksh'];
			$tmhma=$_POST['tmhma'];
			$sm=$_POST['sm'];
			$perimission=1;
				
		
			//Defines
			define('DB_SERVER', 'localhost');
			define('DB_USERNAME', 'root');
			define('DB_PASSWORD', '');
			define('DB_DATABASE', 'Login');
			
			$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
			$result = mysqli_query($link,"select * from users ") or die("Unable to query database Spiti soy".mysqli_error());
			while($row = mysqli_fetch_array($result)) {

				if ($username==$row['username'])
				{
					echo"Your username is already in use you must use another"; $perimission=-1;
				}
			}
            if ($perimission==1)
            {				
			$sql = "INSERT INTO users(username,password,Epitheto,Polh,Nomo,Taksh,Tmhma,Sxolikh_Monada,onoma,rights)
			VALUES ('$username','$password','$epitheto','$polh','$nomos','$taksh','$tmhma','$sm','$onoma','Mathiths')";
			if (mysqli_query($link, $sql)) {
					echo "Your registration has been complete.Thanks for choosing us";
					} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($link);
					}
					
            }
			
			?>
			<form method="get" action="Logout.php">
			<button type="submit" id="btn">Home Page</button>
			</form>
			
	</div>

</body>
</html>
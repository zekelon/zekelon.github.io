<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Results Display</title>
	<link rel="stylesheet" type="text/css" href="styleZekes2.css">
<style>
	u { 
    text-decoration: underline;
     }
	table{
    border: 1px solid black;
    border-collapse: collapse;
	background-color: #4CAF50;
	}
	th {
		border: 1px solid black;
		border-collapse: collapse;
		background-color: #4CAF50;
	}
	td{
		border: 1px solid black;
		border-collapse: collapse;
		
	}
	
</style>

</head>
<body>

	
	<h1 style="text-align:center;">Congatulations!!</h1>
	    <table>
		<tr>
		<th>Νο.</th>
		<th>ID.</th>
		<th>Question</th>
		<th>You Selected</th>
		<th>Right answer </th>
		<th><font color="aqua">Status</font> </th>
		<th>
	        <?php
			$username=$_SESSION['username'];
			$password=$_SESSION['password'];
			$userscore=0;
			$testname=$_SESSION['testname'];
			$value=0;
			$qn=0;
			$ra=0;
			$wa=0;
			$ta=0;
			$qnu=0;
			//Defines
			define('DB_SERVER', 'localhost');
			define('DB_USERNAME', 'root');
			define('DB_PASSWORD', '');
			define('DB_DATABASE', 'Login');
			$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
			//Search in the database
			$result = mysqli_query($link,"select * from questions where testname='$testname'") or die("Unable to query database Spiti soy".mysqli_error());
			if (mysqli_num_rows($result) > 0) {
			// output data of each row
			?>
			<div id="container">
	        <?php 
			while($row = mysqli_fetch_array($result)) {
                $qn++;
				$ta++;
				$qnu++;
				if ($_POST[$row["quizID"]]==$row["answer"])
				{
				    $ra++;
			?>
					<tr>
					<td><?=$qnu?></td>
					<td><?=$row["quizID"]?></td>
					<td><?=$row["question"]?></td>
					<td><?=$_POST[$row["quizID"]]?></td>
					<td><?=$row["answer"]?></td>
					<td bgcolor="aqua">Correct</td>
					</tr>		
			<?php		
				}
				else
				{
					$wa++;
			?>
					<tr>
					<td><?=$qnu?></td>
					<td><?=$row["quizID"]?></td>
					<td><?=$row["question"]?></td>
					<td><?=$_POST[$row["quizID"]]?></td>
					<td><?=$row["answer"]?></td>
					<td bgcolor="red">Wrong</td>
					</tr>			  
				<?php }
			
			}
			$value= 20 / $qn ;
			$userscore=$ra*$value;
			$result = mysqli_query($link,"select score,Swstes,Lanthasmenes,Synolikes,id from users where username = '$username' and password = '$password'") or die("Unable to query database Spiti soy".mysqli_error());
			$row = mysqli_fetch_array($result);
			if($row['score']==0)
			{
				$newscore=$userscore;
			}
			else{
			$newscore= ($row['score']+ $userscore)/2;
			}
			$oldscore=($row['score']);
			$newra=($ra+$row['Swstes']);
			$newwa=($wa+$row['Lanthasmenes']);
			$newta=($ta+$row['Synolikes']);
			$id=$row['id'];
			$sql = "UPDATE users SET score=$newscore,Swstes=$newra,Lanthasmenes=$newwa,Synolikes=$newta WHERE id=$id";
			if ($link->query($sql) === TRUE) {
			echo "   Record updated successfully";
			} else {
			echo "Error updating record: " . $link->error;
			}			
			}
			?>
			</div>
			</table>
			<div id="frm">
			<p>You answered <?=$ta?> questions </p>
			<p>Right was  <?=$ra?> questions </p>
			<p>Wrong was <?=$wa?> questions </p>
			<p>Your previous score was <?=$oldscore?> </p>
			<p>Your new score is <?=round($newscore,2)?> </p>
			
			<form method="get" action="Mathiths.php">
			<button type="submit" id="btnb">Go back</button>
			</form>
			<form method="get" action="Logout.php">
			<button type="submit" id="btnb">Logout</button>
			</div>
</body>
</html>
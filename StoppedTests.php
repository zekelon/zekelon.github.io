<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Play Geography Quiz</title>
	
<style>
table, th, td {
    border: 1px solid black;
}
</style>

</head>

<body style="background-color:Sienna">
	
	<h1>Your Changed Status Are <br></h1>
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
			$result = mysqli_query($link,"select * from testnames") or die("Unable to query database Spiti soy".mysqli_error());
			if (mysqli_num_rows($result) > 0)
		{
			// output data of each row
			?>
			<div id="frm">
	        <?php 
			while($row = mysqli_fetch_array($result))
			{

				if ($_POST[$row['id']]=='Active')
				{
					$id=$row["id"];
					$sql = "UPDATE testnames SET status='Active' WHERE id=$id";
					if (mysqli_query($link, $sql)) {
					
					} else {
					echo "Error updating record: " . mysqli_error($link);
					}
				  
			?>	
					
					
			<?php		
				}
				else if ($_POST[$row['id']]=='Stop')
				{
					$id=$row["id"];
					$sql = "UPDATE testnames SET status='Stopped' WHERE id=$id";
					if (mysqli_query($link, $sql)) {
					
					} else {
					echo "Error updating record: " . mysqli_error($link);
					}
					?>
				<?php
				}
				else{}
			}
		}
?>
<table style="background-color:LimeGreen; display: inline-block;">
   <tr>
   <th>Test Names</th>
   <th>Proffesors</th>
   <th>Difficulty</th>
   <th>Suggested Class</th>
   <th>Questions</th>
   <th>Tmhma</th>
   <th>Sxolikh Monada</th>
   <th>Status</th>
   </tr>
   <tr>
	<?php   
			$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
			$result = mysqli_query($link,"select * from testnames") or die("Unable to query database Spiti soy".mysqli_error());
			if (mysqli_num_rows($result) > 0) {
			 while($row = mysqli_fetch_array($result))
			 {
				$testname=$row["testname"];
			
			   ?>
			  
			 
			  <td> <?=$testname?> </td>
              <td> <?=$row['kathigiths']?> </td>
			  <td> <?=$row['bathmos_d']?> </td>
			  <td> <?=$row['Sclass']?> </td>
			  <td> <?=$row['Questions']?> </td>
			  <td> <?=$row['tmhma']?> </td>
			  <td> <?=$row['sxolikh_monada']?> </td>
			  <td> <?=$row['Status']?> </td>
			  </tr>
			   
			   <?php
			 }
			}
			?>
		</table>		
			<form method="get" action="Kathigiths.php">
			<button type="submit" id="btnb">Go back</button>
			</form>
			</div>
			
			

</body>
</html>
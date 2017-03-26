<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
	  <title> Welcome to the Quiz Selection <br> Please Select Category<br> Good Luck </title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body style="background-color:Sienna">
<div id="container">
   <h1></h1>
   <form action="StoppedTests.php" method="POST">
 <fieldset style="background-color:LimeGreen; display: inline-block;">
   <table>
   <tr>
   <th>Activate-Deactivate Tests</th>
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
	<?php   //Magia
			define('DB_SERVER', 'localhost');
			define('DB_USERNAME', 'root');
			define('DB_PASSWORD', '');
			define('DB_DATABASE', 'Login');
			$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
			$result = mysqli_query($link,"select * from testnames") or die("Unable to query database Spiti soy".mysqli_error());
			if (mysqli_num_rows($result) > 0) {
			 while($row = mysqli_fetch_array($result))
			 {
				$testname=$row["testname"];
			
			   ?>
			  <td> <input type="radio" name=<?=$row["id"]?> value="Active" checked="checked">
			  <input type="radio" name=<?=$row["id"]?> value="Stop" ><br> </td>
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
       
    	
	<input type="Submit" id="Stoptest" value="ChangeStatus"/>
	
			</form>
			<form method="get" action="elexths.php">
			<div style="text-align:left;">
			<button  class="button button1"  type="submit">Go Back</button>
			</div>
	</fieldset>
   
   
   </div>
   </body>
   </html>
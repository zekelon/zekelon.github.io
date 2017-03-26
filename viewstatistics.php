<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Play Geography Quiz</title>
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
<style>
</style>

</head>
<body>

	
	<h1 style="text-align:center;"> </h1>
	        <?php
			$polh=$_POST['polh'];
			$nomos=$_POST['nomos'];
			$taksh=$_POST['taksh'];
			$tmhma=$_POST['tmhma'];
			$sm=$_POST['sm'];
			//Defines
			define('DB_SERVER', 'localhost');
			define('DB_USERNAME', 'root');
			define('DB_PASSWORD', '');
			define('DB_DATABASE', 'Login');
			
			$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
			if($polh!="All"
			   && $nomos!="All"
			   && $taksh!="All"
			   && $tmhma!="All"
			   && $sm!="All"){
						 $result = mysqli_query($link,"select * from users WHERE polh='$polh' AND nomo='$nomos' AND taksh='$taksh' AND tmhma='$tmhma' AND Sxolikh_Monada='$sm'") or die("Unable to query database Spiti soy".mysqli_error());
						 }
		    else if($polh!="All"
					&& $nomos=="All"
					&& $taksh=="All"
					&& $tmhma=="All"
					&& $sm=="All"){
						 $result = mysqli_query($link,"select * from users WHERE polh='$polh'") or die("Unable to query database Spiti soy".mysqli_error());
							   }
			else if($polh!="All"
					&& $nomos!="All"
					&& $taksh=="All"
					&& $tmhma=="All"
					&& $sm=="All"){
						 $result = mysqli_query($link,"select * from users WHERE polh='$polh' AND nomo='$nomos'") or die("Unable to query database Spiti soy".mysqli_error());
							   }	
	        else if($polh!="All"
					&& $nomos!="All"
					&& $taksh!="All"
					&& $tmhma=="All"
					&& $sm=="All"){
						 $result = mysqli_query($link,"select * from users WHERE polh='$polh' AND nomo='$nomos' AND taksh='$taksh''") or die("Unable to query database Spiti soy".mysqli_error());
							   }
            else if($polh!="All"
					&& $nomos=="All"
					&& $taksh=="All"
					&& $tmhma!="All"
					&& $sm=="All"){
						 $result = mysqli_query($link,"select * from users WHERE polh='$polh' AND nomo='$nomos' AND taksh='$taksh' AND tmhma='$tmhma'") or die("Unable to query database Spiti soy".mysqli_error());
							   }
            else if($polh!="All"
					&& $nomos=="All"
					&& $taksh=="All"
					&& $tmhma!="All"
					&& $sm=="All"){
						 $result = mysqli_query($link,"select * from users WHERE polh='$polh' AND nomo='$nomos' AND taksh='$taksh' AND tmhma='$tmhma'") or die("Unable to query database Spiti soy".mysqli_error());
							   }
			else if($polh=="All"
			   && $nomos!="All"
			   && $taksh=="All"
			   && $tmhma=="All"
			   && $sm=="All"){
						 $result = mysqli_query($link,"select * from users WHERE nomo='$nomos'") or die("Unable to query database Spiti soy".mysqli_error());
						 }
		    else if($polh=="All"
			   && $nomos=="All"
			   && $taksh!="All"
			   && $tmhma=="All"
			   && $sm=="All"){
						 $result = mysqli_query($link,"select * from users WHERE taksh='$taksh'") or die("Unable to query database Spiti soy".mysqli_error());
						 }
			else if($polh=="All"
			   && $nomos=="All"
			   && $taksh=="All"
			   && $tmhma=="All"
			   && $sm!="All"){
						 $result = mysqli_query($link,"select * from users WHERE Sxolikh_Monada='$sm'") or die("Unable to query database Spiti soy".mysqli_error());
						 }
			else if($polh=="All"
			   && $nomos=="All"
			   && $taksh=="All"
			   && $tmhma=="All"
			   && $sm=="All"){
						 $result = mysqli_query($link,"select * from users") or die("Unable to query database Spiti soy".mysqli_error());
						 }
			else if($polh=="All"
			   && $nomos=="All"
			   && $taksh=="All"
			   && $tmhma!="All"
			   && $sm!="All"){
						 $result = mysqli_query($link,"select * from users WHERE tmhma='$tmhma' AND Sxolikh_Monada='$sm'") or die("Unable to query database Spiti soy".mysqli_error());
						 }
			else if($polh=="All"
			   && $nomos=="All"
			   && $taksh!="All"
			   && $tmhma=="All"
			   && $sm!="All"){
						 $result = mysqli_query($link,"select * from users WHERE taksh='$taksh' AND Sxolikh_Monada='$sm'") or die("Unable to query database Spiti soy".mysqli_error());
						 }
							   
							
							  
			?>
            <div id="frm1">			
			<table style="width:0%">
			<tr>
			<th>ID </th>
			<th>Name </th>
			<th>Surname </th> 
			<th>Rights </th>
			<th>City </th> 
			<th>Nomos </th>
			<th>Class </th>
			<th>Tmhma </th> 
			<th>Sxolikh monada </th>
			<th>Total correct answers </th> 
			<th>Total wrong answers </th>
			<th>Chance to answer correct </th>
			<th>Score </th>
			</tr>
			<?php
			while($row = mysqli_fetch_array($result)) {
			
			
			if($row['Swstes']!=0) {$possibility = ($row['Swstes'] / ($row['Lanthasmenes'] + $row['Swstes'] ) )*100; $possibility = (float)number_format($possibility, 1, '.', '');}
			else {$possibility = "Unknown";}
			?>
			<tr>
			<td><?=$row['id']?> </td>
			<td><?=$row['onoma']?> </td> 
			<td><?=$row['Epitheto']?> </td>
			<td><?=$row['Rights']?> </td>
			<td><?=$row['Polh']?> </td> 
			<td><?=$row['Nomo']?> </td>
			<td><?=$row['Taksh']?> </td>
			<td><?=$row['Tmhma']?> </td>
			<td><?=$row['Sxolikh_Monada']?> </td>
			<td><?=$row['Swstes']?></td> 
			<td><?=$row['Lanthasmenes']?> </td>
			<td><?=$possibility?>% </td>
			<td><?=$row['score']?> </td> 
			<?php
			}
			?>
			</tr>
			 <tfoot>
			<tr>
            <td colspan="13"><font color="blue">Compiled in 2016 by Basilh Michail</font></td>
			</tr>
			</tfoot>  
			</table>
			<form method="get" action="Login.php">
			<div style="text-align:center;">
			<button  class="button button1"  type="submit">Go Back</button>
			</div>
			</form>
			</div>	
</body>
</html>
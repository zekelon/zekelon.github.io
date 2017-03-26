

 <?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Stoixeia</title>
	<link rel="stylesheet" type="text/css" href="styleStoixeia.css">
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


</head>
<body>

	
	<h1 style="text-align:center;"> </h1>
	        <?php
			$username=$_SESSION['username'];
			$password=$_SESSION['password'];
			//Defines
			define('DB_SERVER', 'localhost');
			define('DB_USERNAME', 'root');
			define('DB_PASSWORD', '');
			define('DB_DATABASE', 'Login');
			
			$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
			$result = mysqli_query($link,"select * from users where username = '$username' and password = '$password'") or die("Unable to query database Spiti soy".mysqli_error());
			?>
            <div >			
			<table style="width:20%" align="center">
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
			
			
			if($row['Swstes']!=0) {$possibility = ($row['Swstes'] / ($row['Lanthasmenes'] + $row['Swstes'] ) )*100;}
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
			<td><?=round($possibility,1)?>% </td>
			<td><?=$row['score']?> </td> 
			<?php
			}
			?>
			</tr>
			 <tfoot>
			<tr>
            <td colspan="13">Compiled in 2016 by Basilh Michail</td>
			</tr>
			</tfoot>  
			</table>
			<form method="get" action="Mathiths.php">
			<div style="text-align:center;">
			<button  class="button button1"  type="submit">Go Back</button>
			</div>
			</form>
			</div>	
</body>
</html>
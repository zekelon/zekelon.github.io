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
			//Defines
			define('DB_SERVER', 'localhost');
			define('DB_USERNAME', 'root');
			define('DB_PASSWORD', '');
			define('DB_DATABASE', 'Login');
			
			$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
			$result = mysqli_query($link,"select * from questions where testname!=''") or die("Unable to query database Spiti soy".mysqli_error())							  
			?>
            <div id="frm1">			
			<table style="width:0%">
			<tr>
			<th>TestName</th>
			<th>ID </th>
			<th>Question</th>
			<th>Choice1</th> 
			<th>Choice2</th>
			<th>Choice3</th> 
			<th>Answer</th>
			<th>Approved</th>
			<th>Difficulty</th> 
			<th>Taksh/eis </th> 
			<th>Eisigiths</th>
			</tr>
			<?php
			while($row = mysqli_fetch_array($result)) {
			?>
			<tr>
			<td><?=$row['testname']?> </td>
			<td><?=$row['quizID']?> </td>
			<td><?=$row['question']?> </td> 
			<td><?=$row['choice1']?> </td>
			<td><?=$row['choice2']?> </td>
			<td><?=$row['choice3']?> </td> 
			<td><?=$row['answer']?> </td>
			<td><?=$row['egkekrimenh']?> </td>
			<td><?=$row['bathmos_d']?> </td>
			<td><?=$row['takseis']?> </td>
			<td><?=$row['eisigiths']?></td> 
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
			<form method="get" action="Kathigiths.php">
			<div style="text-align:center;">
			<button  class="button button1"  type="submit">Go Back</button>
			</div>
			</form>
			</div>	
</body>
</html>
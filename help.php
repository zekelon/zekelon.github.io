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

	
	
            <div class="centered">		
             Test Accounts are the following			
			<table style="width:100%">
			<tr>
			<th>Rights </th>
			<th>Username</th>
			<th>Password</th> 
			</tr>
			<tr>
			<td>Eisigiths</td>
			<td>TestEisigiths</td> 
			<td>Eisigiths</td>
			</tr>
			<tr>
			<td>Kathigiths</td>
			<td>TestKathigiths</td> 
			<td>Kathigiths</td>
			</tr>
			<tr>
			<td>Elexths</td>
			<td>TestElexths</td> 
			<td>Elexths</td>
			</tr>
			 <tfoot>
			<tr>
            <td colspan="13"><font color="blue">Compiled in 2016 by Basilh Michail</font></td>
			</tr>
			</tfoot>  
			</table>
			We are currently on Test mode<br> so please be respectfull to the bugs
			<form method="get" action="Login.php">
			<div style="text-align:center;">
			<button  class="button button1"  type="submit">Go Back</button>
			</div>
			</form>
			</div>	
</body>
</html>
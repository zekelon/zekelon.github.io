<?php session_start()  ?>
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

</head>
<body>

     <?php $testname=$_POST['testname'];
		   $tmhma=$_POST['tmhma'];
		   $sm=$_POST['sm'];
		   $username=$_SESSION['username'];
		   $sd=$_POST['difficulty'];
		   $sc=$_POST['sc'];
		   $sq=$_POST['qn'];
	 ?>		
	
	
	        <?php
			
			
			//Defines
			define('DB_SERVER', 'localhost');
			define('DB_USERNAME', 'root');
			define('DB_PASSWORD', '');
			define('DB_DATABASE', 'Login');
			$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
			// sql to create table

			//Search in the database
			$result = mysqli_query($link,"select * from questions WHERE egkekrimenh='yes' AND testname=''") or die("Unable to query database Spiti soy".mysqli_error());
			if (mysqli_num_rows($result) > 0)
			{
			// output data of each row
			?>
			<div id="frm1">
	        <?php
             $dyskolia=1;
             $nu1=0;
			 $nu2=0;
			 $nu3=0;
             $class=0;	
			 $qn=0;
			 $all=0;
            while($row = mysqli_fetch_array($result))
			{
				 $ans_array[$all] = $row["quizID"];
				 $all++;
            }	
            shuffle($ans_array);
            do
            {
			 $result = mysqli_query($link,"select * from questions WHERE quizID='$ans_array[$qn]'") or die("Unable to query database Spiti soy".mysqli_error());
			 while($row = mysqli_fetch_array($result))
			 {
					$nu1++;
					$nu2++;
					$nu3++;
					$dyskolia=$dyskolia+$row["bathmos_d"];
					$class=$class+$row['takseis'];
					$id=$row["quizID"];
					$sql = "UPDATE questions SET testname='$testname' WHERE quizID=$id";					
					if (mysqli_query($link, $sql)) {
					} else {
					echo "Apotyxia pros8hkhs " . mysqli_error($link);
					}
			 }
			 $qn++;
		    }while($qn<$sq);				
			?>	
						
					
					
			<?php		
				}
				
			 $dyskolia=$dyskolia/$nu1;
			 $class=$class/$nu2;
		     $sql = "INSERT INTO testnames (testname,kathigiths,bathmos_d,Sclass,Questions,tmhma,sxolikh_monada)
					VALUES ('$testname','$username','$dyskolia','$class','$nu3','$tmhma','$sm')";
			 if (mysqli_query($link, $sql)) {
			echo "New record created successfully";	
			 } else {
			echo "Error: " . $sql . "<br>" . mysqli_error($link);
			}
		
			?>
			 <p>Gratz!!<br>You Created the following Test<p>
					<table align="center">
						<tr>
						<th>Test Names</th>
						<th>Proffesor</th>
						<th>Difficulty</th>
						<th>Suggested Class</th>
						<th>Questions</th>
						<th>Tmhma</th>
						<th>Sxolikh Monada</th>
						</tr>
						<tr>
						<td><?=$testname?> </td>
						<td><?=$username?> </td>
						<td><?=round($dyskolia,0)?> </td>
						<td><?=round($class,0)?> </td>
						<td><?=$nu3?> </td>
						<td><?=$tmhma?> </td>
						<td><?=$sm?> </td>
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

			
			

</body>
</html>
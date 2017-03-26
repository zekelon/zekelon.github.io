<!DOCTYPE html >
<?php
// Start the session
session_start();
?>
<html>
<head>
<meta charset='utf-8'> 
 <title>Login page </title>
 <link rel="stylesheet" type="text/css" href="styleElexths.css">
 </head>
<body>
 
         
        <div id="frm">
		<form action="egkrish.php" method="POST">
		<?php
		
		//Defines
		define('DB_SERVER', 'localhost');
		define('DB_USERNAME', 'root');
		define('DB_PASSWORD', '');
		define('DB_DATABASE', 'Login');
		$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
			///Search in the database
			$result = mysqli_query($link,"select * from questions WHERE egkekrimenh!='yes'") or die("Unable to query database Spiti soy".mysqli_error($link));
			if (mysqli_num_rows($result) > 0) {
			// output data of each row
			
			while($row = mysqli_fetch_array($result)) {
			?>
             <p>Erwthsh No.<?=$row["quizID"]?>.<?=$row["question"]?></p>
			 <p>Bathmos Dyskolias:<?=$row["bathmos_d"]?></p>
			 <p>Taksh/eis:<?=$row["takseis"]?></p>
			 <p>Choice1:<?=$row["choice1"]?></p>
			 <p>Choice2:<?=$row["choice2"]?></p>
			 <p>Choice3:<?=$row["choice3"]?></p>
			 <p>Answer:<?=$row["answer"]?></p>
			 <p>You aprove??Mr/s elexth</p>
			 <input type="radio" name=<?=$row["quizID"]?> value="Yes">Yes<br>
			 <input type="radio" name=<?=$row["quizID"]?> value="No">No<br>
			 <br><br>
			 
			
			
			
				
			
			<?php
			}
            ?>
            <input type="submit" value="Submit!"> 
			 </form>
            <?php			 
			}
			else
			{?>
			<p>There are no new questions to aprove</p>	
			<?php } ?>
          
    
   
	
 </form>
			<form method="get" action="elexths.php">
			<button type="submit" id="btnb">Go back</button>
			</form>
 </div>
 </body>
</html>

  
   
  
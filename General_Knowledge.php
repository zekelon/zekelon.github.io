<?php session_start(); ?>
<html lang="en">
<head>
      <meta charset="utf-8">
	  <title> Welcome to the Quiz</title>
</head>
<body>
<div id="container">
   <h1>Welcome to the Quiz General_Knowledge <br> <br> <br> </h1>
   
   <form action="result_display.php" method="POST">
		<?php
		
		//Defines
		define('DB_SERVER', 'localhost');
		define('DB_USERNAME', 'root');
		define('DB_PASSWORD', '');
		define('DB_DATABASE', 'Login');
		$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
        $result = mysqli_query($link,"select * from quiz") or die("Unable to query database Spiti soy".mysqli_error());
		//Search in the database
		if (mysqli_num_rows($result) > 0) {
		// output data of each row
	 
		while($row = mysqli_fetch_array($result)) {?>
        
		<?php $ans_array = array($row["choice1"], $row["choice2"], $row["choice3"], $row["answer"]);
		shuffle($ans_array); ?>
		<p><?=$row["quizID"]?>.<?=$row["question"]?></p>
    
		<input type="radio" name=<?=$row["quizID"]?> value="<?=$ans_array[0]?>" required> <?=$ans_array[0]?><br>
		<input type="radio" name=<?=$row["quizID"]?> value="<?=$ans_array[1]?>"> <?=$ans_array[1]?><br>
		<input type="radio" name=<?=$row["quizID"]?> value="<?=$ans_array[2]?>"> <?=$ans_array[2]?><br>
		<input type="radio" name=<?=$row["quizID"]?> value="<?=$ans_array[3]?>"> <?=$ans_array[3]?><br>
		
    
		<?php } } else  {echo "0 results";} ?>
    
    <br><br>
    <input type="submit" value="Submit!">
    

	</form>
   
   
   </div>
   </body>
   </html> 




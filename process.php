<?php
   session_start();
   //Defines
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'Login');
   $link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   //Get username and password from the form
   $_SESSION['username'] = $_POST['user'];
   $_SESSION['password'] = $_POST['pass'];
   $_SESSION['rights'] = $_POST['Rights'];
   $username = $_POST['user'];
   $password = $_POST['pass'];
   $rights = $_POST['Rights'];
   //Stop the hackers
   $username = stripcslashes($username);
   $password = stripcslashes($password);
   $username = mysqli_real_escape_string($link,$username);
   $password = mysqli_real_escape_string($link,$password);
   
   //Search in the database
   $result = mysqli_query($link,"select * from users where username = '$username' and password = '$password' and rights='$rights'") or die("Unable to query database Spiti soy".mysqli_error());
   $row = mysqli_fetch_array($result);
   if ($row['username'] == $username && $row['password'] == $password){
	   echo "Login succeed!!! <3 <3 <3 Welcome: ".$row['username']; echo" " .$rights;
	   if ($rights == 'Mathiths') {   header('Location: /Solo/Mathiths.php'); }
	   if ($rights == 'Eisigiths') {   header('Location: /Solo/Eisigiths.php'); }
	   if ($rights == 'Elexths') {   header('Location: /Solo/elexths.php'); }
	   if ($rights == 'Kathigiths') {   header('Location: /Solo/kathigiths.php'); }
	   if ($rights == 'Admin') {   header('Location: /Solo/Admin/admin.php'); }
    }
	else{
		
	}   
?>
<!DOCTYPE html >
<html>
<head>
<meta charset='utf-8'> 
 <title>Login page </title>
 <link rel="stylesheet" type="text/css" href="styleLogin.css">
 </head>
 <body>
  <div id="frm">
    <p><strong>Incorrect Username or Password (or Rights) :) </strong></p> 
   <a href="logout.php">Press here if you want to try another  account</a>
 </body>
 </html>
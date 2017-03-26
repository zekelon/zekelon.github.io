<?php
session_start();
$epilogh = $_POST['epiloghkathigith'];
$_SESSION['epiloghkathigith'] = $_POST['epiloghkathigith'];
$_SESSION['testname'] = $_POST['testname'];
if ($epilogh == 'testcreate')  header ('Location: /solo/testcreate.php');
 ?>
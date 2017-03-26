<?php
session_start();
$epilogh = $_POST['Epilogh'];
$_SESSION['Epilogh'] = $_POST['Epilogh'];
if ($epilogh == 'Eisagw')  header ('Location: /solo/eisagwgherwthsewn.php');
 ?>
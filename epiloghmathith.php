<?php
session_start();
$epilogh = $_POST['Epilogh'];
$_SESSION['Epilogh'] = $_POST['Epilogh'];
if ($epilogh == 'Test')  header ('Location: /solo/test.php');
if ($epilogh == 'Stoixeia')  header ('Location: /solo/stoixeia.php');
if ($epilogh == 'Notifications')  header ('Location: /solo/notifications.php');
 ?>
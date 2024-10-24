<?php 

session_start();

// unset($_SESSION['logged_in']);

$_SESSION = array();

session_destroy();

header('Location: index.php');

?>


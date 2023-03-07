<?php

// to log out of personal page 
session_start();

if(isset($_SESSION['loggedin'])){
	session_destroy();
	unset($_SESSION['loggedin']);
	// when logging out the user will be taken to the home page 
	header('location: index.php');
}

?>
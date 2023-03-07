<?php

	session_start();

	$email = "";
	$password = "";

    $errors = array();

	if ($_SERVER["SERVER_NAME"] == "students.gaim.ucf.edu") {
		if ($_SERVER["SCRIPT_URL"]=="/~ya818631/dig4172C/rmpRedesign/SignUpReport.php"){
		//yara
		$connection = mysqli_connect('localhost', 'ya818631', '34096885!Yar', 'ya818631');
		}else {
		// $connection = mysqli_connect('localhost', 'em248165', '3535A5F4D0EB4F319A17FBEEF735D58Aa!', 'em248165');
	 	$connection = mysqli_connect('localhost', 'root', '', 'rmpaccount');	
		}
	}

    // registration validation
	if(isset($_POST['regsubmit'])){
		
		$password = $_POST['pass'];
        $email = $_POST['email'];
		$re_password = $_POST['re_pass'];

		//original php element 
		$password = mysqli_real_escape_string($connection, $password); 

		
        if( !$_POST ) return;
		
		if(empty($email)){
			array_push($errors, "Email is required");
		}
		if(empty($password)){
			array_push($errors, "Password is required");
		}
		//Validating re-entered password
		if ($password != $re_password) {
			array_push($errors, "Passwords do not match");
		}

		if(count($errors) == 0){

			$password = password_hash($password, PASSWORD_DEFAULT);

			$sql = "INSERT INTO users (email, password, re_password) VALUES ('$email', '$password', '$re_password')";

			mysqli_query($connection, $sql);

			$_SESSION['loggedin'] = $email;

            header('location: reportIn.php');

		}

	} 
	

?> 
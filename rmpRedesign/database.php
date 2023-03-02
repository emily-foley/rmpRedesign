<?php

	session_start();

	$email = "";
	$password = "";

    $errors = array();

	if ($_SERVER["SERVER_NAME"] == "students.gaim.ucf.edu") {
		if ($_SERVER["SCRIPT_URL"]=="/~ya818631/dig4172C/rmpRedesign/signUp.php"){
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

			$sql = "INSERT INTO log (email, password, re_password) VALUES ('$email', '$password', '$re_password')";

			mysqli_query($connection, $sql);

			$_SESSION['loggedin'] = $email;

            header('location: personalization.html');

		}

	} 

    //check if user submitted login form
	if(isset($_POST['logsubmit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(empty($email)){

			array_push($errors, "Email is required");
		}
		if(empty($password)){
			array_push($errors, "Password is required");
		}
		if(count($errors) == 0){

			$query1 = "SELECT * FROM log WHERE email='$email'";
            
            //to find the users input in the database table
			$result1 = mysqli_query($connection, $query1);

			$count1 = mysqli_num_rows($result1);

			if($count1 == 1){ 
				$query2 = "SELECT password FROM log WHERE email='$email'";

				$result2 = mysqli_query($connection, $query2);

				$passrow = mysqli_fetch_array($result2);

				$hashed = $passrow['password'];

				if(password_verify($password, $hashed)){

					$_SESSION['loggedin'] = $email;

					header('location: index.html');

				}
				
			}
			else{ 
				array_push($errors, "The Email or password is incorrect!");
			}
		}
	}


?> 
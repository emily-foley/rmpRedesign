<?php

	session_start();

	$password = "";
    $email = "";

    $errors = array();
	
	$connection = mysqli_connect('localhost', 'root', '', 'rmpaccount');

    // registration validation
	if(isset($_POST['regsubmit'])){
		
		$password = $_POST['pass'];
        $email = $_POST['email'];

		//original php element 
		$password = mysqli_real_escape_string($connection, $password); 
	
        if( !$_POST ) return;
		
		if(empty($password)){
			array_push($errors, "Password is required");
		}
        if(empty($email)){
			array_push($errors, "Email is required");
		}

		if(count($errors) == 0){

			$password = password_hash($password, PASSWORD_DEFAULT);

			$sql = "INSERT INTO info (password, email) VALUES ('$password', '$email')";

			mysqli_query($connection, $sql);

			$_SESSION['loggedin'] = $email;

            header('location: quiz.html');

		}

	} 

    //check if user submitted log in form
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

			$query1 = "SELECT * FROM info WHERE email='$email'";
            
            //to find the users input in the database table
			$result1 = mysqli_query($connection, $query1);

			$count1 = mysqli_num_rows($result1);

			if($count1 == 1){ 
				$query2 = "SELECT password FROM info WHERE email='$email'";

				$result2 = mysqli_query($connection, $query2);

				$passrow = mysqli_fetch_array($result2);

				$hashed = $passrow['password'];

				if(password_verify($password, $hashed)){

					$_SESSION['loggedin'] = $email;

					header('location: quiz.html');

				}
				
			}
			else{ 
				array_push($errors, "The Email or password is incorrect!");
			}
		}
	}


?> 
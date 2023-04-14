<?php

include('database.php');

if ($_SERVER["SERVER_NAME"] == "students.gaim.ucf.edu") {
  if ($_SERVER["SCRIPT_URL"] == "/~ya818631/dig4172C/rmpRedesign/recommendedIn.php") {
    //yara
    $connection = mysqli_connect('localhost', 'ya818631', '34096885!Yar', 'ya818631');
  } else {
    // $connection = mysqli_connect('localhost', 'em248165', '3535A5F4D0EB4F319A17FBEEF735D58Aa!', 'em248165');
    $connection = mysqli_connect('localhost', 'root', '', 'rmpaccount');
  }
}

// print_r($_POST);
$professorID = $_POST['searchprof'];
$query = "SELECT * FROM professors WHERE professorID = $professorID";
$query_run = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html lang="en">


<!--Head section contains metadata (not displayed in page)-->

<head>
  <!--Title displayed in browser tab-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>RMP</title>
  <!-- RESET DEFAULT CSS -->
  <link rel="stylesheet" href="css/reset.css">
  <!-- FAVICON -->
  <link rel="icon" type="image/gif" sizes="12x12" href="images/capLogoBlue.png">
  <!-- BOOTSTRAP CSS CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- CUSTOM CSS-->
  <link rel="stylesheet" href="css/styles.css">
  <!-- IMPORTING ADOBE FONTS-->
  <link rel="stylesheet" href="https://use.typekit.net/lgz4qep.css">
</head>

<body>

  <!-- Navbar -->
  <?php include('NavbarLoggedIn.php'); ?>
  <!-- Navbar -->


  <div class="pt-5 justify-content-center">
    <h2 class="text-center topPad proxima-bold pb-3 ">Professor Recommendations</h2>
    <h4 class="text-center ">Based on your preferences, these professors seem like a good fit</h4>
  </div>

  <?php
  // Define score ranges and corresponding professor IDs
  $scoreRanges = array(
    array(3, 4, array(1, 2, 3)),
    // If the user score is between 3 and 4, recommend professors with IDs 1, 2, and 3
    array(5, 6, array(4, 5, 6)),
    // If the user score is between 5 and 6, recommend professors with IDs 4, 5, and 6
    array(7, 8, array(7, 8, 9)) // If the user score is between 7 and 8 recommend professors with IDs 7, 8, and 9
  );

  // Get the user's quiz score from the database
  $email = $_SESSION['loggedin'];
  $query = "SELECT quizScore FROM users WHERE email = '$email'";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_assoc($result);
  $quizScore = $row['quizScore'];

  // Loop through the score ranges to find the appropriate professor IDs
  $professorIDs = array();
  foreach ($scoreRanges as $range) {
    if ($quizScore >= $range[0] && $quizScore <= $range[1]) {
      $professorIDs = $range[2];
      break;
    }
  }

  // Display the professor recommendations
  echo "<h2>Professor Recommendations</h2>";
  echo "<table>";
  echo "<tr><th>Professor Name</th><th>Average Difficulty Rating</th><th>Average Would Take Again Percentage</th><th>Average Overall Rating</th></tr>";

  foreach ($professorIDs as $professorID) {
    // Get the professor's name
    $query = "SELECT name FROM professors WHERE professorID = $professorID";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];

    // Calculate the average difficulty rating
    $query = "SELECT AVG(difficulty) AS avgDifficulty FROM ratings WHERE professorID = $professorID";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $avgDifficulty = round($row['avgDifficulty'], 1);

    // Calculate the would take again percentage
    $query = "SELECT COUNT(*) AS numRatings, SUM(again='yes') AS numYes FROM ratings WHERE professorID = $professorID";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $numRatings = $row['numRatings'];
    $numYes = $row['numYes'];
    $wouldTakeAgain = round($numYes / $numRatings * 100);

    // Calculate the average overall rating
    $query = "SELECT AVG(rating) AS avgRating FROM ratings WHERE professorID = $professorID";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $avgRating = round($row['avgRating'], 1);

    // Display the professor's information
    echo "<tr><td>$name</td><td>$avgDifficulty</td><td>$wouldTakeAgain%</td><td>$avgRating</td></tr>";
  }
  echo "</table>";
  ?>

  <div class="container mb-4">
    <div class="row justify-content-md-center">



    </div>
  </div>

</body>
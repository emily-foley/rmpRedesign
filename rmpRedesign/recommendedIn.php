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
  // Get the user's quiz score
  $query = "SELECT quizScore FROM users WHERE email = \"" . $_SESSION['loggedin'] . "\"";
  $query_run = mysqli_query($connection, $query);
  $user_score = mysqli_fetch_assoc($query_run)['quizScore'];

  // Defining the range of scores to use for professor recommendations
  if ($user_score >= 0 && $user_score < 5) {
    $professor_ids = array(4, 6, 8); // Professor IDs for low quiz scores
  } else if ($user_score >= 6 && $user_score < 7) {
    $professor_ids = array(5, 7, 10); // Professor IDs for medium quiz scores
  } else {
    $professor_ids = array(11, 9); // Professor IDs for high quiz scores
  }

  // Query the ratings table to get the necessary data for each professor in the selected range
  $professor_data = array();
  foreach ($professor_ids as $prof_id) {
    $query = "SELECT professors.name AS name, AVG(ratings.difficulty) AS difficulty, 
              COUNT(CASE WHEN ratings.again = 'yes' THEN 1 END)/COUNT(*) AS would_take_again, 
              ROUND(AVG(ratings.rating), 1) AS overall_rating
              FROM ratings JOIN professors ON professors.professorID = ratings.professorID 
              WHERE professors.professorID = $prof_id GROUP BY professors.name";
    $query_run = mysqli_query($connection, $query);
    $prof_data = mysqli_fetch_assoc($query_run);
    $professor_data[] = $prof_data;
  }

  // Display the professor recommendations
  foreach ($professor_data as $prof_data) {
    $name = $prof_data['name'];
    $difficulty = round($prof_data['difficulty'], 1);
    $would_take_again = round($prof_data['would_take_again'] * 100) . "%";
    $overall_rating = $prof_data['overall_rating']; ?>
    
    <div class="container mb-4">
      <div class="row justify-content-md-center">
        <div class="column3 greyBg ">
            <div style='float:left; width:30%; margin-left:30px'>
              <br>
                <h4 class="proxima-bold text-left">
                  <?php
                     echo "$name";
                  ?>
                </h4>
                <h6 class="text-left greyText">University of Central Florida</h6>
            </div>
            <div style=' float:left; width:30%'></divstyle>
              <ul class="stats-list">
                <br>
                  <li>
                    <h2>
                      <?php
                        echo "$would_take_again";
                      ?> 
                              </h2> <span class="stats-list-label">Would take again</span>
                            </li>
                            <li>
                              <h2>
                              <?php
                                echo "$difficulty";
                              ?>
                              </h2> <span class="stats-list-label">Level of dificulty</span>
                            </li>
                          </ul>
                        </div>
                    <div style='float:left; width:30%'>
                        <h1 class="display-2 proxima-bold text-right">
                        <?php
                          echo "$overall_rating";
                        ?>
                        </h1>
                    </div>
          
                      <div style='float:left; width: 90%; margin-left:30px; margin-top:30px;'>
                      <p class="greyText">Full details</p>
                      </div>
           </div>
        </div>
      </div>
                <?php
  }
  ?>

</body>
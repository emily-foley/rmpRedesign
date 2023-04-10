<?php


if ($_SERVER["SERVER_NAME"] == "students.gaim.ucf.edu") {
  if ($_SERVER["SCRIPT_URL"] == "/~ya818631/dig4172C/rmpRedesign/oneCompare.php") {
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
<?php include ('navbar.html');?>
<!-- Navbar -->

    <div class="pt-5 justify-content-center">
        <h2 class="text-center topPad proxima-bold pb-3 ">Compare Professors</h2>
    </div>

    <div class="container">
    <div class="row ">
        <div class="column2 greyBg mx-10 ">
            <div style='float:left; width:60%; margin-left:30px'>
            <br>
                <h4 class="proxima-bold text-left">Grace Adams</h4>
                <h6 class="text-left greyText">University of Central Florida</h6>
            </div>
            <div style='float:left; width:30%'>
                <h1 class="display-2 proxima-bold text-right">4.9</h1> 
            </div>
            <ul class="stats-list">
                <li>
                  <h1>98%</h1> <span class="stats-list-label">Would take again</span>
                </li>
                <li>
                  <h1>1.4</h1> <span class="stats-list-label">Level of dificulty</span>
                </li>
              </ul>

              <br>
              <br>

              <div style='float:left; width: 80%; margin-left:30px'>
              <p class="greyText">Full details</p>
              </div>
              <div style='float:right; width: 5%'>
                <a href="emptyCompare.php" class="text-decoration-none">
                <img src="images/Trash.png" style="width: 20%" alt="Trash" >
                </a>
              </div>

            <br>
            <br>
            <br>
        </div>
        <div class="column greyBg mx-10 "><a href="compare2.php" class="text-decoration-none"><h1 class="display-1 proxima-bold blue">+</h1></a></div>
    </div>
    </div>
</body>
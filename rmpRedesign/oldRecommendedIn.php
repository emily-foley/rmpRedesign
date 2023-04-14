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


    <div class="container mb-4">
        <div class="row justify-content-md-center">
            <?php
            //$sql = "SELECT * FROM ratings JOIN users WHERE professorID = $professorID AND quizScore = $quizScore";
            $email = $_POST['email']
            $sql = "SELECT name, professors.professorID AS proID, ratings.professorID AS profID, quizScore, rating, again, difficulty, email FROM ratings JOIN users JOIN professors WHERE professors.professorID = $professorID AND ratings.professorID = $professorID AND quizScore = $quizScore AND email = \"$email\" ";
            $sql_run = mysqli_query($connection, $sql);
            $check_rating = mysqli_num_rows($sql_run) >0;

            if($check_rating) {
                while($row = mysqli_fetch_assoc($sql_run)){
                    ?>
                    <!--Row 2-->
                    <div class="column3 greyBg ">
                        <div style='float:left; width:30%; margin-left:30px'>
                            <br>
                            <h4 class="proxima-bold text-left">
                                
                                <?php
                                echo $row ['rating'];
                                ?>
                            </h4>
                            <h6 class="text-left greyText">University of Central Florida</h6>
                        </div>
                        <div style=' float:left; width:30%'>
                            </divstyle>
                            <ul class="stats-list">
                                <br>
                                <li>
                                    <h2>54%</h2> <span class="stats-list-label">Would take again</span>
                                </li>
                                <li>
                                    <h2>2.5</h2> <span class="stats-list-label">Level of dificulty</span>
                                </li>
                            </ul>
                        </div>
                        <div style='float:left; width:30%'>
                            <h1 class="display-2 proxima-bold text-right">4.3</h1>
                        </div>

                        <br>
                        <div style='float:left; width:100%'>
                            <span class="badgepos">Gives Feedback</span>
                            <span class="badgepos">Caring</span>
                            <span class="badgeneg">Tough Grader</span>
                            <span class="badgeneg">Reading Heavy</span>
                        </div>




                        <div style='float:left; width: 90%; margin-left:30px; margin-top:30px;'>
                            <p class="greyText">Full details</p>
                        </div>

                        <?php
                }
            } else {
                echo "No Result";
            }
            ?>

                <div style='float:center; margin-top:30px;'>
                    <h6 class="greyText">View More</h6>
                </div>
            </div>
        </div>

</body>
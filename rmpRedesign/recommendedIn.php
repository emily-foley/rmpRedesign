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
        $sql = "SELECT name, professors.professorID AS proID, ratings.professorID AS profID, quizScore, rating, difficulty FROM ratings JOIN users JOIN professors WHERE professors.professorID = $professorID AND ratings.professorID = $professorID AND quizScore = $quizScore";
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
                        if ($row['quizScore'] == 4 || $row['quizScore'] == 6 || $row['quizScore'] == 8) { 
                          echo ($row['name'] = Leonardo DiCaprio) ;
                          } else if ($row['quizScore'] == 2 || $row['quizScore'] == 3 || $row['quizScore'] == 5) 
                            { echo ($row['name'] = Tom Cruise); 
                          } else if($row['quizScore'] == 1 || $row['quizScore'] == 7)  
                            { echo ($row['name'] = Drew Barrymore);  }                  
                      ?> 
                </h4>
                <h6 class="text-left greyText">University of Central Florida</h6>
            </div>
            <div style=' float:left; width:30%'></div>
                <ul class="stats-list">
                    <br>
                    <li>
                      <h2>
                        <?php
                          $seql = "SELECT COUNT(*) AS total_answers, SUM(again='Yes') AS total_yes FROM ratings WHERE professorID = $professorID";
                          $reslt = mysqli_query($connection, $seql);
                          
                          if (!$reslt) {
                              die("Query failed: " . mysqli_error($connection));
                          }
                          
                          $rowz = mysqli_fetch_assoc($reslt);
                          
                          $percentage_yes = ($rowz['total_yes'] / $rowz['total_answers']) * 100;
                          
                          echo round($percentage_yes, 1) . "<b>%</b>";                   
                            ?>
                        </h2> <span class="stats-list-label">Would take again</span>
                    </li>
                    <li>
                      <h2>
                        <?php
                        //Averaging difficulty
                        $qry = "SELECT ROUND(AVG(difficulty),1) AS AverageDif FROM ratings WHERE professorID = $professorID";
                        $qry_result = mysqli_query($connection, $qry);
                        while($row = mysqli_fetch_assoc($qry_result)){
                        echo $row['AverageDif'];
                        }
                        ?>
                      </h2><span class="stats-list-label">Level of dificulty</span>
                    </li>
                  </ul>
                </div>
            <div style='float:left; width:30%'>
                <h1 class="display-2 proxima-bold text-right">
                <?php
                  //Averaging rating
                  $qry = "SELECT ROUND(AVG(rating),1) AS AverageRating FROM ratings WHERE professorID = $professorID";
                  $qry_result = mysqli_query($connection, $qry);
                  while($row = mysqli_fetch_assoc($qry_result)){
                  echo $row['AverageRating'];
                  }
                  ?>
                </h1>
            </div>
  
              <div style='float:left; width: 90%; margin-left:30px; margin-top:30px;'>
              <p class="greyText">Full details</p>
              </div>
        </div>
        <?php
          }
        } else{
          echo "No Result";
        }
        ?>

        <br>
            <div style='float:center; margin-top:30px;'>
                <h6 class="greyText">View More</h6>
            </div>
    </div>
    </div>

</body>
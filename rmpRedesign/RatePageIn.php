<?php


if ($_SERVER["SERVER_NAME"] == "students.gaim.ucf.edu") {
  if ($_SERVER["SCRIPT_URL"] == "/~ya818631/dig4172C/rmpRedesign/RatePageIn.php") {
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
<?php include ('NavbarLoggedIn.php');?>
<!-- Navbar -->

<div class="container">
    <div class="row ">
        <div class="column6">
        <?php echo "<input type=\"hidden\" name=\"professorID\" value=\"$professorID\">"; ?>
            <div style='float:left; width:35%'>
                <h1 class="display-1 proxima-bold text-right"> 
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
            <div style='float:left; width:90%;'>
                <h4 class="proxima-bold text-left">
                <?php
                  if ($query_run->num_rows > 0) {
                  while ($row = $query_run->fetch_assoc()) {
                  echo $row['name'];
                 }
                } else {
                echo "No Results";
                }
                ?> </h4>
                <h6 class="text-left greyText"> University of Central Florida </h6>
            </div>
            <div style='float:left; width:55%; margin-top: 10px;'>
                <a href="rateprofessor.php" class="fakeBtnBlue proxima-bold text-decoration-none">
                <?php echo "<input type=\"hidden\" name=\"professorID\" value=\"$professorID\">"; ?>
                Rate Professor</a>
              </div>
            <div style='float:left; width:55%; margin-top: 25px; margin-bottom: 20px;'>
              <a href="oneCompare.php" class="fakeBtnYell proxima-bold text-decoration-none">Compare Professor</a>
            </div>
            
            <ul class="stats-list" style='float:left; width:60%'>
                <li>
                <h1>
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
                  </h1> <span class="stats-list-label">Would take again</span>
                </li>
                <li>
                  <h1>
                  <?php
                  //Averaging difficulty
                  $qry = "SELECT ROUND(AVG(difficulty),1) AS AverageDif FROM ratings WHERE professorID = $professorID";
                  $qry_result = mysqli_query($connection, $qry);
                  while($row = mysqli_fetch_assoc($qry_result)){
                  echo $row['AverageDif'];
                  }
                  ?>
                  </h1> <span class="stats-list-label">Level of dificulty</span>
                </li>
              </ul>


        <!-- Side Bar graph -->
        </div>
        <div class="column7 greyBg mx-10">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
            <div class="row">
              <div class="side right pl-1">
                <div>Amazing <b>5</b>  &nbsp</div>
              </div>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-5"></div>
                </div>
              </div>
              <div class="side2 right">
                <div>38</div>
              </div>
              <div class="side right pl-1">
                <div>Good <b>4</b>  &nbsp</div>
              </div>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-4"></div>
                </div>
              </div>
              <div class="side2 right">
                <div>25</div>
              </div>
              <div class="side right pl-1">
                <div>Fine <b>3</b>  &nbsp</div>
              </div>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-3"></div>
                </div>
              </div>
              <div class="side2 right">
                <div>5</div>
              </div>
              <div class="side right">
                <div>Bad <b>2</b>  &nbsp</div>
              </div>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-2"></div>
                </div>
              </div>
              <div class="side2 right">
                <div>7</div>
              </div>
              <div class="side right">
                <div>Awful <b>1</b>  &nbsp</div>
              </div>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-1"></div>
                </div>
              </div>
              <div class="side2 right">
                <div>0</div>
              </div>
            </div>
        </div>
        </div>
        <div>
            <p class="ml-5"><b> 3 Ratings</b></p>
            <button class="btn btn-outline-secondary whiteButton px-4 ml-5 proxima" type="submit">All Courses</button>
        </div>

        <!--Ratings-->
        <?php 
        $sql = "SELECT * FROM ratings WHERE professorID = $professorID";
        $sql_run = mysqli_query($connection, $sql);
        $check_rating = mysqli_num_rows($sql_run) >0;

        if($check_rating) {
          while($row = mysqli_fetch_assoc($sql_run)){
            ?>
                    <div class="container ml-4" style="margin-right:300px">
          <div class="row justify-content-md-center">
              <!--Row 1-->
              <div class="column3 greyBg pt-3">
              <?php echo "<input type=\"hidden\" name=\"professorID\" value=\"$professorID\">"; ?>
                  <div style='float:left; width:8%'>
                      <h4 class="proxima-bold text-left" style="margin-left:130px">
                      <?php
                      echo $row['course'];
                    ?> 
                    </h4>
                  </div>

                  <div style=' float:left; width: 45%;'>
                    <?php
                      if ($row['rating'] == 1.0 || $row['rating'] == 2.0) { 
                        echo '<img src="images/Awful.png" alt="Awful" style="width:5%"> &nbsp <b>Awful</b>'; 
                        } else if ($row['rating'] == 3.0) 
                          { echo '<img src="images/Average.png" alt="Average" style="width:5%"> &nbsp <b>Average</b>'; 
                        } else if($row['rating'] == 4.0 || $row['rating'] == 5.0)  
                          { echo '<img src="images/Awesome.png" alt="Awesome" style="width:5%"> &nbsp <b>Awesome</b>';  }                  
                    ?> 
                  </div>

                  <div style='float:left; width: 46%; padding-left: 0px;'>
                    <h8><b>
                    <?php
                      echo $row['date'];
                    ?> 
                    </b></h8>
                  </div>

                  <br>
                  <br>

                  <div style='float:left'>
                    <p class="mb-1 ml-3"><b>Quality</b></p>
                    <h2 class="badgeSideAwe proxima-bold ml-3">
                    <?php
                      echo $row['rating'];
                    ?> 
                    </h2>
                  </div>

                  <div style='float:left; width:30%'>
                    <p class="mb-1">Would take again: <b>
                    <?php
                      echo $row['again'];
                    ?> 
                    </b></p>
                  </div>

                  <div style='float:left; width:15%'>
                    <p class="mb-1">Textbook: <b>
                    <?php
                      echo $row['textbooks'];
                    ?> 
                    </b></p>
                  </div>

                  <div style='float:left; width:10%'>
                    <p class="mb-1">Grade: <b>
                      <?php
                      echo $row['grade'];
                    ?> 
                    </b></p>
                  </div>              

                  <br>
                  <br>                  

                  <div style="margin-left:10%">
                    <p class="text-left">
                      <?php
                          echo $row['review'];
                    ?> 
                    </p>
                  </div>

                  <div style='float:left'>
                    <p class="mb-1 ml-3"><b>Dificulty</b></p>
                    <h2 class="badgeSide proxima-bold ml-3">
                    <?php
                      echo $row['difficulty'];
                    ?> 
                    </h2>
                  </div>

                  <!-- <div style='float:left; width:40%; margin-top: 30px;'>
                    <span class="badgepos">Gives Feedback</span>
                    <span class="badgeneg">Participation matters</span>
                    <span class="badgeneg">Tough grader</span>
                  </div> -->

                  <br>
                  <br>
                  <br>
                  <br>

                  <div style='float:left; width:10%'>
                    <h6><img src="images/ThumbsUp.png" alt="Thumbs Up" style="width:28%"> &nbsp<b>1</b></h6>
                  </div>

                  <div style='float:left; width:5%'>
                    <h6><img src="images/ThumbsDown.png" alt="Thumbs Up" style="width:57%"> &nbsp<b>0</b></h6>
                  </div>

                  <div style='float:right; margin-right:2%;'>
                    <a class="text-decoration-none" style="color:black">
                    <p><img src="images/Report.png" alt="Report" style="width:50%"></p>
                    <?php
                     echo "<td><a href='reportIn.php?id=" . $row["ratingID"] . "'>Report</a></td>";
                    ?>
                    </a>
                  </div>
                  <br>
              </div>
          </div>
          </div>

            <?php
          }
        } else{
          echo "No Result";
        }
        ?>
        
        <br>
        <br>
        <br>
        <br>
      </div>    
    </div>
</body>
<?php


if ($_SERVER["SERVER_NAME"] == "students.gaim.ucf.edu") {
  if ($_SERVER["SCRIPT_URL"] == "/~ya818631/dig4172C/rmpRedesign/RatePage.php") {
    //yara
    $connection = mysqli_connect('localhost', 'ya818631', '34096885!Yar', 'ya818631');
  } else {
    // $connection = mysqli_connect('localhost', 'em248165', '3535A5F4D0EB4F319A17FBEEF735D58Aa!', 'em248165');
    $connection = mysqli_connect('localhost', 'root', '', 'rmpaccount');
  }
}

if (isset($_POST['insert'])) {
  $professorID = $_POST['professorID'];
  $course = $_POST['course'];
  $online = $_POST['online'];
  $rating = $_POST['rating'];
  $difficulty = $_POST['difficulty'];
  $again = $_POST['again'];
  $textbooks = $_POST['textbooks'];
  $grade = $_POST['grade'];
  $review = $_POST['review'];
  // $created_at = NULL;

  $query = "INSERT INTO ratings (ratingID,professorID,course,online,rating,difficulty,again,textbooks,grade,review) VALUES (NULL,'$professorID','$course','$online','$rating','$difficulty','$again','$textbooks','$grade','$review')";
  $query_run = mysqli_query($connection, $query);

  if ($connection->query($sql) === true) {
    echo "data inserted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
  }

  header('Location: RatePage.php');

}

// print_r($_POST);
$professorID = $_POST['searchprof'];
$query = "SELECT * FROM professors WHERE professorID = $professorID";
$query_run = mysqli_query($connection, $query);ss

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

    <div class="container">
    <div class="row ">
        <div class="column6">
        <?php echo "<input type=\"hidden\" name=\"professorID\" value=\"$professorID\">"; ?>
            <div style='float:left; width:35%'>
                <h1 class="display-1 proxima-bold text-right">4.3</h1> 
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
                <h6 class="text-left greyText">
                <?php
                  if ($query_run->num_rows > 0) {
                  while ($row = $query_run->fetch_assoc()) {
                  echo $row['school'];
                 }
                } else {
                echo "No Results";
                }
                ?> 
                </h6>
            </div>
            <div style='float:left; width:55%; margin-top: 10px;'>
                <a href="rateprofessor.php" class="fakeBtnBlue proxima-bold text-decoration-none">Rate Professor</a>
              </div>
            <div style='float:left; width:55%; margin-top: 25px; margin-bottom: 20px;'>
              <a href="oneCompare.php" class="fakeBtnYell proxima-bold text-decoration-none">Compare Professor</a>
            </div>
            
            <ul class="stats-list" style='float:left; width:60%'>
                <li>
                  <h1>54%</h1> <span class="stats-list-label">Would take again</span>
                </li>
                <li>
                  <h1>2.5</h1> <span class="stats-list-label">Level of dificulty</span>
                </li>
              </ul>

              <div style='float:left; width: 40.5%'>
                <p class="greyText">Professors Top Tags</p>
                </div>

             <div style='float:left; width:60%'>
              <span class="badgepos" style='float:left; margin-right: 10px;'>Gives Feedback</span>
              <span class="badgepos" style='float:left'>Caring</span>
              <br>
              <br>
              <span class="badgeneg" style='float:left; margin-right: 10px;'>Tough Grader</span>
              <span class="badgeneg" style='float:left'>Reading Heavy</span>
            </div>
              <br>
              <br>

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
            <p class="ml-5"><b>75 ratings</b></p>
            <button class="btn btn-outline-secondary whiteButton px-4 ml-5 proxima" type="submit">All Courses</button>
        </div>

        <div class="container ml-4" style="margin-right:300px">
          <div class="row justify-content-md-center">
              <!--Row 1-->
              <div class="column3 greyBg pt-3">
                  <div style='float:left; width:8%'>
                      <h4 class="proxima-bold text-left" style="margin-left:130px">DIG3716C</h4>
                  </div>

                  <div style=' float:left; width: 45%;'>
                    <span class="badgeAwe"><img src="images/Awesome.png" alt="smiley face" style="width:5%" > &nbsp <b>Awesome</b></span>
                  </div>

                  <div style='float:left; width: 46%; padding-left: 0px;'>
                    <h8><b>November 11th, 2021</b></h8>
                  </div>

                  <br>
                  <br>

                  <div style='float:left'>
                    <p class="mb-1 ml-3"><b>Quality</b></p>
                    <h2 class="badgeSideAwe proxima-bold ml-3">5.0</h2>
                  </div>

                  <div style='float:left; width:25%'>
                    <p class="mb-1">Attendance: <b>Not Mandatory</b></p>
                  </div>

                  <div style='float:left; width:15%'>
                    <p class="mb-1">Would take again: <b>Yes</b></p>
                  </div>

                  <div style='float:left; width:15%'>
                    <p class="mb-1">Textbook: <b>Yes</b></p>
                  </div>

                  <div style='float:left; width:10%'>
                    <p class="mb-1">Grade: <b>A</b></p>
                  </div>              

                  <br>
                  <br>                  

                  <div style="margin-left:10%">
                    <p class="text-left">Attendance isn't mandatory, but if you don't go you'll fall behind. The class was
                       tough and he is very picky with grading. I still ended up with an A in this class and I felt 
                       like I learned a lot. I went to almost every class, didn't procrastinate and asked questions 
                       when needed to. His feedback is helpful but he can come off as a bit rude.</p>
                  </div>

                  <div style='float:left'>
                    <p class="mb-1 ml-3"><b>Dificulty</b></p>
                    <h2 class="badgeSide proxima-bold ml-3">5.0</h2>
                  </div>

                  <div style='float:left; width:40%; margin-top: 30px;'>
                    <span class="badgepos">Gives Feedback</span>
                    <span class="badgeneg">Participation matters</span>
                    <span class="badgeneg">Tough grader</span>
                  </div>

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
                    <a href="report.php" class="text-decoration-none" style="color:black">
                    <p><img src="images/Report.png" alt="Report" style="width:50%"><br>Report</p>
                    </a>
                  </div>
    
              </div>
  
          </div>
          </div>
          </div>
    </div>
</body>
<?php


if ($_SERVER["SERVER_NAME"] == "students.gaim.ucf.edu") {
  if ($_SERVER["SCRIPT_URL"] == "/~ya818631/dig4172C/rmpRedesign/twoCompare.php") {
    //yara
    $connection = mysqli_connect('localhost', 'ya818631', '34096885!Yar', 'ya818631');
  } else {
    // $connection = mysqli_connect('localhost', 'em248165', '3535A5F4D0EB4F319A17FBEEF735D58Aa!', 'em248165');
    $connection = mysqli_connect('localhost', 'root', '', 'rmpaccount');
  }
}

// print_r($_POST);
//$professorID = $_POST['searchprof'];
//$query = "SELECT * FROM professors WHERE professorID = $professorID";
//$query_run = mysqli_query($connection, $query);

// Retrieve reviewID from POST request
$reviewID = $_POST['reviewID'];

// Query the database for review details
$query = "SELECT * FROM ratings WHERE ratingID = $ratingID";
$result = mysqli_query($connection, $query);

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
<?php echo "<input type=\"hidden\" name=\"professorID\" value=\"$professorID\">"; ?>
  <h4 class="mb-4 proxima-bold text-center pt-5">Report a Rating for 
  <?php
    if ($query_run->num_rows > 0) {
    while ($row = $query_run->fetch_assoc()) {
    echo $row['name'];
    }
     } else {
     echo "No Results";
     }
  ?>
  </h4>

  <div class="container mb-4 w-51 proxima nova">
    <div class="row justify-content-md-center">
      <div class="container py-4 h-100">
        
          
        <div class="container greyBg">
          <div class="p-4">
              <div style='float:left; margin-left:30px'>
    
                <div class="mb-md-4 mt-md-4">
                  <?php 
                
                  //$sql = "SELECT * FROM ratings WHERE professorID = $professorID";
                  // $sql_run = mysqli_query($connection, $sql);
                  //$check_rating = mysqli_num_rows($sql_run) >0;
                  ?>
                  <h5 class="proxima-bold">You are reporting: </h5>
                </div>
                  <p>
                  <?php
                  //if($check_rating) {
                    //while($row = mysqli_fetch_assoc($sql_run)){
                      //echo $row['review'];
                 //}
                //} else {
                //echo "No Results";
                //}
                if (mysqli_num_rows($rating) > 0) {
                  $row = mysqli_fetch_assoc($rating);
                  echo "<p>" . $row["review"] . "</p>";
                } else {
                  echo "Rating not found.";
                }
                ?>
                    <h5 class="proxima-bold">What is the problem?</h5>

                    <p>If you think this comment is inconsistent with Rate My Professors' Site Guidelines, report it and tell
                      us why.</p>
                    </div>    
                    <div class="col-md-7">
                    <input class="resizedTextbox" type="text" placeholder="Tell us what is wrong with this comment...">
                    </div>
                    <div class="mb-4 text-center proxima nova">

                    <div class="mt-5">
                      <a href="reportSubmittedIn.php" class="fakeBtnBlue proxima btn-lg py-1 px-5 mt-3 mb-3 text-decoration-none">Submit</a>
                    </div>
                  <div class="mb-4 text-center proxima nova">
                  <p class="pb-lg-2 mt-3">
                    <a class="proxima greyText text-decoration-none" href="RatePageIn.php">Cancel</a>
                  </p>
              </div>
              </div>
            </div>
        </div>       
  </div>
  </div>

</body>
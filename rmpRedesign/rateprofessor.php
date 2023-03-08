<?php


if ($_SERVER["SERVER_NAME"] == "students.gaim.ucf.edu") {
  if ($_SERVER["SCRIPT_URL"] == "/~ya818631/dig4172C/rmpRedesign/rateprofessor.php") {
    //yara
    $connection = mysqli_connect('localhost', 'ya818631', '34096885!Yar', 'ya818631');
  } else {
    // $connection = mysqli_connect('localhost', 'em248165', '3535A5F4D0EB4F319A17FBEEF735D58Aa!', 'em248165');
    $connection = mysqli_connect('localhost', 'root', '', 'rmpaccount');
  }
}

if (isset($_POST['insert'])) {
  $course = $_POST['course'];
  $online = $_POST['online'];
  $rating = $_POST['rating'];
  $difficulty = $_POST['difficulty'];
  $again = $_POST['again'];
  $textbooks = $_POST['textbooks'];
  $grade = $_POST['grade'];
  $review = $_POST['review'];
  // $created_at = NULL;

  $query = "INSERT INTO ratings (course,online,rating,difficulty,again,textbooks,grade,review) VALUES ('$course','$online','$rating','$difficulty','$again','$textbooks','$grade','$review')";
  $query_run = mysqli_query($connection, $query);

  if ($connection->query($sql) === TRUE) {
    echo "data inserted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
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
  <?php include('navbar.html'); ?>
  <!-- Navbar -->

  <div class="pt-3 justify-content-center">
    <h2 class="text-center topPad pb-2 proxima">Rate: <b>Leonardo DiCaprio</b></h2>
  </div>

  <div class="r-container mb-4">
    <div class="row justify-content-md-center">
      <!--Row 1-->
      <div class="column5 greyBg">
        <div style='float:left; width:30%; margin-left:30px'>
          <br>
          <h5 class="proxima-bold text-left">Select Course Code</h5>
        </div>

        <div style='float:left; width:37%'>
          <div class="dropdown">
            <div class="justify-content-left">
              <form action="" method="post">

                <input type="hidden" name="professorID" value=<?php $professorID ?>>

                <select name="course" id="courses">
                  <option value="DIG4172C">DIG4172C</option>
                  <option value="DIG3043">DIG3043</option>
                  <option value="DIG4813">DIG4813</option>
                </select>
            </div>
          </div>

          <br>
          <br>
          <div class="r-questions">
            <div style='float:left; width:250%; margin-left: -105px;'>
              <input type="radio" name="online" value="Online course"><label>This is an online course</label>
            </div>

          </div>
        </div>
      </div>

      <!--Row 2-->
      <div class="column5 greyBg ">
        <div style='float:left; width:30%; margin-left:30px'>
          <br>
          <h5 class="proxima-bold text-left">Rate Your Professor</h5>
        </div>

        <div style='float:left; width:40%; margin-left: 70px;'>
          <div class="rating">
            <input type="radio" name="rating" id="rate5" value="5.0"><label for="rate5">5</label>
            <input type="radio" name="rating" id="rate4" value="4.0"><label for="rate4">4</label>
            <input type="radio" name="rating" id="rate3" value="3.0"><label for="rate3">3</label>
            <input type="radio" name="rating" id="rate2" value="2.0"><label for="rate2">2</label>
            <input type="radio" name="rating" id="rate1" value="1.0"><label for="rate1">1</label>
          </div>
        </div>
      </div>
      <!--Row 3-->
      <div class="column5 greyBg ">
        <div style='float:left; width:30%; margin-left:30px'>
          <br>
          <h5 class="proxima-bold text-left">How difficult was this professor?</h5>
        </div>

        <div style='float:left; width:40%; margin-left: 70px;'>
          <div class="rating2">
            <input type="radio" name="difficulty" id="rate10" value="5.0"><label for="rate10">5</label>
            <input type="radio" name="difficulty" id="rate9" value="4.0"><label for="rate9">4</label>
            <input type="radio" name="difficulty" id="rate8" value="3.0"><label for="rate8">3</label>
            <input type="radio" name="difficulty" id="rate7" value="2.0"><label for="rate7">2</label>
            <input type="radio" name="difficulty" id="rate6" value="1.0"><label for="rate6">1</label>
          </div>
        </div>
      </div>
      <!--Row 4-->
      <div class="column5 greyBg ">
        <div style='float:left; width:30%; margin-left:30px'>
          <br>
          <h5 class="proxima-bold text-left">Would you take this professor again?</h5>
        </div>
        <br>
        <div class="r-questions">
          <div style='float:left; width:43%'>
            <input type="radio" name="again" id="question2" value="Yes"><label> Yes</label>
            <input type="radio" name="again" id="questions2" value="No"><label> No</label>
          </div>
        </div>
      </div>
      <!--Row 5-->
      <div class="column5 greyBg ">
        <div style='float:left; width:30%; margin-left:30px'>
          <br>
          <h5 class="proxima-bold text-left">Did this professor use textbooks?</h5>
        </div>
        <br>
        <div class="r-questions">
          <div style='float:left; width:43%'>
            <input type="radio" name="textbooks" id="question3" value="Yes"><label> Yes</label>
            <input type="radio" name="textbooks" id="questions3" value="No"><label> No</label>
          </div>
        </div>
      </div>
      <!--Row 6-->
      <div class="column5 greyBg ">
        <div style='float:left; width:30%; margin-left:30px'>
          <br>
          <h5 class="proxima-bold text-left">What grade did you get in the class?</h5>
        </div>
        <br>
        <div style='float:left; width:30%'>
          <div class="dropdown">
            <div class="justify-content-left">
              <select name="grade" id="grades">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="F">F</option>
              </select>
            </div>
          </div>

        </div>
        <br>
        <br>
        <br>
        <br>
        <div style='float:left; width:100%; margin-left:30px'>
          <h5 class="proxima-bold text-left">Write a Review</h5>
        </div>
        <textarea name="review" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <br>
        <br>
        <input type="submit" name="insert" value="Submit Rating"
          class="fakeBtnBlue proxima nova text-decoration-none" />
      </div>
      </form>
    </div>
    <!-- <div class="my-5 w-80 text-center">
      <a href="RatingSubmitted.php" class="fakeBtnBlue proxima nova">Submit Rating</a>
    </div> -->
</body>
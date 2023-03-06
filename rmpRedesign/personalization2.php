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

    <div>
        <div class="pt-5 justify-content-center">
        <h2 class="text-center topPad pb-2 proxima-bold">Personalization Quiz</h2>
        
          <div class="q-container mb-4 w-50 text-center proxima nova">
              <h5>I prefer...</h5>
              <div class="questions">
                  <input type="radio" name="questions" id="question1"><label>Group Projects</label>
                  <input type="radio" name="questions" id="question2"><label>Individual work</label>
              </div>
          </div>
          <div class="q-container mb-4 w-50 text-center proxima nova">
              <h5>I prefer to attend classes...</h5>
              <div class="questions">
                  <input type="radio" name="questions2" id="question3"><label>Online</label>
                  <input type="radio" name="questions2" id="question4"><label>In person</label>
              </div>
          </div>
           <div class="q-container mb-4 w-50 text-center proxima nova">
               <h5>I would rather learn from...</h5>
              <div class="questions">
                  <input type="radio" name="questions3" id="question1"><label>Reading</label>
                  <input type="radio" name="questions3" id="question1"><label>Lectures</label>
              </div>
          </div>
          <div class="q-container mb-4 w-50 text-center proxima nova">
              <h5>I prefer a class with mostly...</h5>
              <div class="questions">
                  <input type="radio" name="questions4" id="question1">
                  <label>Essays</label>
                  <input type="radio" name="questions4" id="question1"><label>Quizzes</label>
              </div>
          </div>
          <div class="mb-4 w-80 text-center">
            <a href="indexIn.php" class="fakeBtnBlue proxima nova text-decoration-none btn-lg py-1 px-5 mt-3 mb-3">Submit</a>
        </div>
      </div>  
    </div>    
    </body>
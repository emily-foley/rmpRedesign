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

  <h4 class="mb-4 proxima-bold text-center pt-5">Report a Rating for Leonardo DiCaprio</h4>

  <div class="container mb-4 w-51 proxima nova">
    <div class="row justify-content-md-center">
      <div class="container py-4 h-100">
        
          
            <div class="container greyBg">
              <div class="p-4">
                <div style='float:left; margin-left:30px'>
    
                <div class="mb-md-4 mt-md-4">
    
                  <h5 class="proxima-bold">You are reporting: </h5>
                </div>
                  <p>"The class was incredibly hard and the professor did nothing to help. He would only read off of PowerPoints and barely gave us any feedback on our work."</p>
    
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
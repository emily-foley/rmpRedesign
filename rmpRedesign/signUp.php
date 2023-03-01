<!-- including the databse code for mysql connection -->
<?php include('database.php') ?>

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
    <link rel="icon" type="image/gif" sizes="12x12" href="#">
    <!-- BOOTSTRAP CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- CUSTOM CSS-->
    <link rel="stylesheet" href="css/styles.css">
    <!-- IMPORTING ADOBE FONTS-->
    <link rel="stylesheet" href="https://use.typekit.net/lgz4qep.css">
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navy navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">
      <img src="images/capLogo.png" height="50" alt="logo">
    </a>
    <div class="collapse navbar-collapse justify-content-left">
      <ul class="navbar-nav d-flex flex-row me-1">
        <li class="nav-item me-3 me-lg-0">
          <!-- <img src="images/RateNav.png" alt="logo" class="center"> -->
          <a class="nav-link text-white" href="rate.html"><i class="mx-1"></i> Rate</a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <!-- <img src="images/RecommendationsNav.png" alt="logo" class="center"> -->
          <a class="nav-link text-white" href="recommend.html"><i class="mx-1"></i> Recommendations</a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <!-- <img src="images/CompareNav.png"  alt="logo" class="center"> -->
          <a class="nav-link text-white" href="emptyCompare.html"><i class="mx-1"></i> Compare</a>
        </li>
    </div>

    <div class="justify-content-left">
      <form onsubmit="event.preventDefault()" class="form-inline my-lg-1"> <input
          class="whiteInput form-control mr-sm-2" type="text" placeholder="Search">
      </form>
    </div>

    <li class="nav-item me-3 me-lg-0 noBullet">
      <a class="nav-link text-white" href="login.php"><i class="mx-1"></i> Login</a>
    </li>
    <li class="nav-item me-3 me-lg-0 noBullet">
      <a class="fakeBtn nav-link" href="signUp.php"><i class=""></i>Sign Up</a>
    </li>
    </ul>
  </div>

</nav>
<!-- Navbar -->

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="container greyBg">
          <div class="p-5 text-center">

            <div class="mb-md-3 mt-md-3">

            <form action=" " method="POST">

                <!-- including error pop ups -->
                <?php include('errors.php');?>

              <h2 class="mb-4 proxima-bold">Sign Up</h2>

                <!-- email input box -->
                <div class="form-white mb-4">
                    <input type="email" placeholder="Email" class="whiteInput form-control form-control-lg" id="floatingInput" name="email" required>
                </div>

                <!-- password input box -->
                <div class="form-white mb-4">
                    <input type="password" placeholder="Password" class="whiteInput form-control form-control-lg" id="floatingInput" name="pass" required>
                </div>

                 <!--continue button-->
                <button class="fakeBtnBlue proxima text-decoration-none btn-lg px-5 mb-3" type="submit" name="regsubmit" value="Submit">Continue</button>

              <p class="pb-lg-2">
                <a class="proxima greyText text-decoration-none" href="login.php">Already have an account?</a>
              </p>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <img src="images/pyLeaf.png" alt="decorative leaf" class="leftFix">

  <img src="images/byLeaf.png" alt="decorative leaf" class="rightFix">

</body>
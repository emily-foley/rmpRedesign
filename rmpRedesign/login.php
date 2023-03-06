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
<?php include 'navbar.html';?>
<!-- Navbar -->

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="container greyBg">
          <div class="p-5 text-center">

            <div class="mb-md-3 mt-md-3">

            <form action=" " method="POST"> 

              <h2 class="mb-4 proxima-bold">Login</h2>

                <!-- email input box -->
                <div class="form-white mb-4 form-floating">
                    <input type="email" placeholder="Email" class="whiteInput form-control form-control-lg" id="floatingInput" name="email" required>
                </div>

                <!-- password input box -->
                <div class="form-white mb-3">
                    <input type="password" placeholder="Password" class="whiteInput form-control form-control-lg" id="floatingPassword" name="password" required>
                </div>

                <!-- including error pop ups -->
                <?php include('errors.php');?>

                <!-- submit button -->
                <button class="fakeBtnBlue proxima nova text-decoration-none btn-lg px-5 mb-1 mt-1" type="submit" name="logsubmit" value="Sign in">Continue</button>

                <p class="mb-0">
                <a class="proxima greyText text-decoration-none" href="#">Forgot password?</a>
                </p>

                <!-- link to go to register page if user does not have an account -->
                <p class="proxima greyText text-decoration-none"><a href="signUp.php">Don't have an account?</a></p>

            </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <img src="images/pyLeaf.png" alt="decorative leaf" class="leftFix">

  <img src="images/byLeaf.png" alt="decorative leaf" class="rightFix">

</body>
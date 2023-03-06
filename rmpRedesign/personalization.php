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

    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                <div class="container greyBg">
                    <div class="p-5 text-center">

                        <div class="mb-md-4 mt-md-4">

                            <h2 class="mb-4 proxima-bold">Personalization Quiz</h2>

                            <p class="greyText proxima pt-2 pb-4">Take this quiz so we can recommend professors based on
                                your learning style!</p>

                                
                            <div class="my-3">
                                <a href="personalization2.php" class="fakeBtnBlue proxima text-decoration-none btn-lg py-1 px-5 mt-3 mb-3">Start</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <img src="images/pyLeaf.png" alt="decorative leaf" class="leftFix">

    <img src="images/byLeaf.png" alt="decorative leaf" class="rightFix">

</body>
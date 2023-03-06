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


    <div class="pt-5 justify-content-center">
        <h2 class="text-center topPad proxima-bold pb-3 ">Search a Professor to Compare</h2>
    </div>

    <input class="roundInput" type="text" placeholder="Leonardo DiCapr...">

    <div class="justify-content-center text-center my-4">
      <a href="RatePageIn.php" class="fakeBtnBlue btn-lg text-decoration-none">Search</a>
    </div>

    <div class="center">
        <img src="images/balance.png" alt="girl holding a pencil" width="400">
    </div>

</body>
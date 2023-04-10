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
<nav class="navbar navbar-expand-lg navy navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="indexIn.php">
      <img src="images/capLogo.png" height="50" alt="logo">
    </a>
    <div class="collapse navbar-collapse justify-content-left">
      <ul class="navbar-nav d-flex flex-row me-1">
        <li class="nav-item me-3 me-lg-0">
          <!-- <img src="images/RateNav.png" alt="logo" class="center"> -->
          <a class="nav-link text-white" href="rateIn.php"><i class="mx-1"></i> Rate</a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <!-- <img src="images/RecommendationsNav.png" alt="logo" class="center"> -->
          <a class="nav-link text-white" href="recommendIn.php"><i class="mx-1"></i> Recommendations</a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <!-- <img src="images/CompareNav.png"  alt="logo" class="center"> -->
          <a class="nav-link text-white" href="oneCompareIn.php"><i class="mx-1"></i> Compare</a>
        </li>
    </div>

    <li class="nav-item noBullet">
      <a class="fakeBtn2 nav-link" href="logout.php"><i class="mx-1 ml-0"></i>Logout</a>
    </li>
    </ul>

  </div>

</nav>
<!-- Navbar -->
</body>
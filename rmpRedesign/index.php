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

  <div class="pt-5 justify-content-center">
    <h2 class="text-center topPad pb-2 proxima-bold">Rate My Professors</h2>
  </div>

  <form method="post" action="RatePage.html">
    <input type="text" name="search" placeholder="Search professor...">
    <button type="submit">Search</button>
    <div class="dropdown">
      <ul>
  
      </ul>
    </div>
  </form>

  <!-- <input class="roundInput" type="text" placeholder="Leonardo DiCapri..."> -->

  <!-- <div class="justify-content-center text-center mt-4">
    <a href="RatePage.html" class="fakeBtnBlue btn-lg">Search</a>
  </div> -->

  <div class="row justify-content-center">
    <figure>
      <!-- <img class="center" src="images/girlWithPencil.png" width="180"> -->
      <figcaption>
        <a class="black text-decoration-none" href="rate.html">
          <img class="center" src="images/girlWithPencil.png" width="180">
          Rate a Professor</a>
      </figcaption>
    </figure>
    <figure>
      <!-- <img class="center" src="images/thumbs.png" width="200"> -->
      <figcaption class="mt-4">
        <a class="black text-decoration-none" href="recommend.html">
          <img class="center" src="images/thumbs.png" width="200">
          Recommend me a Professor</a>
      </figcaption>
    </figure>
    <figure>
      <!-- <img class="center" src="images/balance.png" width="200"> -->
      <figcaption class="mt-4">
        <a class="black text-decoration-none" href="compare.html">
          <img class="center" src="images/balance.png" width="200">
          Compare Professors
        </a>
      </figcaption>
    </figure>
  </div>



</body>
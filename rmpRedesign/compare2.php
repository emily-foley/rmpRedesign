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
<?php include ('navbar.html');?>
<!-- Navbar -->


    <div class="pt-5 justify-content-center">
        <h2 class="text-center topPad proxima-bold pb-3 ">Search a Professor to Compare</h2>
    </div>

    <form method="post" action="twoCompare.php">
    <div class="dropdown">
      <ul>

        <?php
        if ($_SERVER["SERVER_NAME"] == "students.gaim.ucf.edu") {
          if ($_SERVER["SCRIPT_URL"] == "/~ya818631/dig4172C/rmpRedesign/compare2.php") {
            //yara
            $connection = mysqli_connect('localhost', 'ya818631', '34096885!Yar', 'ya818631');
          } else {
            // $connection = mysqli_connect('localhost', 'em248165', '3535A5F4D0EB4F319A17FBEEF735D58Aa!', 'em248165');
            $connection = mysqli_connect('localhost', 'root', '', 'ya818631');
          }
        }

        $result = mysqli_query($connection, "SELECT * FROM professors");
        echo "<center>";
        echo "<select id='searchprof' name='searchprof'>";
        echo "<option>Select professor...</option>";
        while ($row = mysqli_fetch_array($result)) {
          echo "<option value=$row[professorID]>$row[name]</option>";
        }
        echo "</select>";
        echo "</center>";
        mysqli_close($connection)

         ?>
      </ul>
      <input class="fakeBtnBlue" type="submit" name="submit" value="View ratings" />
    </div>
  </form>

    <div class="center">
        <img src="images/balance.png" alt="girl holding a pencil" width="400">
    </div>

</body>
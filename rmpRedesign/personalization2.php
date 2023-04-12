<?php

include('database.php');

if ($_SERVER["SERVER_NAME"] == "students.gaim.ucf.edu") {
    if ($_SERVER["SCRIPT_URL"] == "/~ya818631/dig4172C/rmpRedesign/personalization2.php") {
        //yara
        $connection = mysqli_connect('localhost', 'ya818631', '34096885!Yar', 'ya818631');
    } else {
        // $connection = mysqli_connect('localhost', 'em248165', '3535A5F4D0EB4F319A17FBEEF735D58Aa!', 'em248165');
        $connection = mysqli_connect('localhost', 'root', '', 'rmpaccount');
    }
}

if (isset($_POST['insertQuiz'])) {
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];

    $totalScore = $q1 + $q2 + $q3 + $q4;

    $query = "UPDATE users SET quizScore = $totalScore WHERE email = " . $_SESSION['loggedin'] . "";
    echo $query;
    $query_run = mysqli_query($connection, $query);


    // $query = "SELECT SUM(answer_value) AS score FROM quiz WHERE (question_id = 1 AND answer_id = $q1) OR (question_id = 2 AND answer_id = $q2)";
    // $result = mysqli_query($conn, $query);

    // if ($totalscore >= 5) {
    //     echo "You should choose professor A.";
    //   } else {
    //     echo "You should choose professor B.";
    //   }

    if ($connection->query($sql) === true) {
        echo "data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

   // header('Location: indexIn.php');

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
    <?php include('NavbarLoggedIn.php'); ?>
    <!-- Navbar -->

    <div class="pt-5 justify-content-center">
        <form action="" method="post" class="mb-4 w-50 text-center">
            <h2 class="text-center topPad pb-2 proxima-bold">Personalization Quiz</h2>

            <div class="q-container mb-4 w-10 text-center proxima nova">
                <h5>I prefer...</h5>
                <div class="questions">
                    <input type="radio" name="q1" id="question1" value="1" require><label>Group
                        Projects</label>
                    <input type="radio" name="q1" id="question2" value="2" require><label>Individual
                        work</label>
                </div>
            </div>
            <div class="q-container mb-4 w-10 text-center proxima nova">
                <h5>I prefer to attend classes...</h5>
                <div class="questions">
                    <input type="radio" name="q2" id="question3" value="1" require><label>Online</label>
                    <input type="radio" name="q2" id="question4" value="2" require><label>In person</label>
                </div>
            </div>
            <div class="q-container mb-4 w-10 text-center proxima nova">
                <h5>I would rather learn from...</h5>
                <div class="questions">
                    <input type="radio" name="q3" id="question1" value="1" require><label>Reading</label>
                    <input type="radio" name="q3" id="question1" value="2" require><label>Lectures</label>
                </div>
            </div>
            <div class="q-container mb-4 w-10 text-center proxima nova">
                <h5>I prefer a class with mostly...</h5>
                <div class="questions">
                    <input type="radio" name="q4" id="question1" value="1" require>
                    <label>Essays</label>
                    <input type="radio" name="q4" id="question1" value="2" require><label>Quizzes</label>
                </div>
            </div>
            <div class="mb-4 w-80 text-center">
                <input class="fakeBtnBlue" type="submit" name="insertQuiz" value="Submit quiz"
                    class="fakeBtnBlue proxima nova text-decoration-none" />

                <!-- <a href="indexIn.php"
                    class="fakeBtnBlue proxima nova text-decoration-none btn-lg py-1 px-5 mt-3 mb-3">Submit</a> -->
            </div>
        </form>
    </div>
</body>
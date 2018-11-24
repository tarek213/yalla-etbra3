<?php include('server.php') ?>

<?php 
    if($_SESSION['success'] != "done1"){
        header('location: home.php');
    } ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>My WebSite</title>
    <meta name="description" content="my website is to help you get work easily">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/template.css">
    <link rel="stylesheet" type="text/css" href="css/requests-page.css">
</head>

<body>
    <nav class=" navbar-expand-lg navbar navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#"> <img class="logo" src="img/logo.png"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                 <li class="nav-item active">
                        <a class="nav-link" href="choices-page.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="requests-page.php">Blood Donations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="charity.php">Other Donations</a>
                    </li>
                    <li class="nav-item">
                        <form method="post">
                        <input type="submit" name="logout" value="log out" class="nav-link" style="background: none;
    border: none;"href="Home.php">
                        </form>
                    </li>
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item ml-lg-auto">
                            <a class="nav-link" href="#"> <img src="img/FB2.svg" class="social-icon">  </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> <img src="img/tw2.svg" class="social-icon">  </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> <img src="img/gm.png" class="social-icon">  </a>
                        </li>
                    </ul>
            </ul>
        </div>
    </nav>
    <h1>
        <center>
            Blood Requests
        </center>
    </h1>



    <?php
        $img="";
$db = mysqli_connect('localhost', 'root', '', "yalla_etbra3");
        $r = mysqli_query($db, "SELECT * FROM blood_requests1");
        while($row  = mysqli_fetch_array($r)){
            if($row['user']==$_SESSION['email']){
                if($row['hospital_name']=="MagdyYacoub"){
                    $img = "img/MagdyYacoub.png";
                } else if ($row['hospital_name']=="Andalosia"){
                 $img = "img/andlosia.png";   
                } else if ($row['hospital_name']=="ElTkhasosy"){
                 $img = "img/t5asosy.jpg";   
                } else if ($row['hospital_name']=="DarFoad"){
                 $img = "img/darfo2ad.gif";   
                }
                echo '
    <div class="container">
        <img src=" ' . $img .'" alt="MY" class="image">
        <div class="overlay">
            <div class="text">This is an urgent appeal for blood donation ... <br> we need '. $row['number'] .' donations of your type .Please give blood and save a life </div>
            <form method="post">
            <input type="hidden" name="done" value="'.$row['date'] .'">
            <input type="submit" value="DONATE NOW !" class="button" name="a" onclick="myFunction()">
            </form>
            <script>
                function myFunction() {
                    var x = document.getElementById("snackbar")
                    x.className = "show";
                    setTimeout(function() {
                        x.className = x.className.replace("show", "");
                    }, 3000);
                }

            </script>

            <div id="snackbar">Thank you :)</div>
        </div>
    </div>
      '  ;        
            }
        }
    
    
    ?>







<!--

        <div class="container">
            <img src="img/MagdyYacoub.png" alt="MY" class="image">
            <div class="overlay">
                <div class="text">This is an urgent appeal for blood donation of type A.Please give blood and save a life </div>
                <button class="button" onclick="myFunction()">DONATE NOW!</button>

                <script>
                    function myFunction() {
                        var x = document.getElementById("snackbar")
                        x.className = "show";
                        setTimeout(function() {
                            x.className = x.className.replace("show", "");
                        }, 3000);
                    }

                </script>

                <div id="snackbar">Thank you :)</div>
            </div>
        </div>
        <div class="container">
            <img src="img/57357.jpg" alt="MY" class="image">
            <div class="overlay">
                <div class="text">This is an urgent appeal for blood donation of type A.Please give blood and save a life </div>
                <button class="button" onclick="myFunction()">DONATE NOW!</button>

                <script>
                    function myFunction() {
                        var x = document.getElementById("snackbar")
                        x.className = "show";
                        setTimeout(function() {
                            x.className = x.className.replace("show", "");
                        }, 3000);
                    }

                </script>

                <div id="snackbar">Thank you :)</div>
            </div>
        </div>
-->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
</body>

</html>

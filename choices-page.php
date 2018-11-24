<?php include('server.php') ?>

<?php
    if($_SESSION['success'] == "logout"){
        $_SESSION['success'] = "logout1";
        header('location: choices-page.php');
    }

    else if($_SESSION['success'] == "done1"){
        $a = $_SESSION['success'];
        echo '
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My WebSite</title>
        <meta name="description" content="my website is to help you get work easily">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/template.css">
        <link rel="stylesheet" type="text/css" href="css/choices-page.css">
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
        <div class="circle">
            <div class="button" style="vertical-align:middle"><span><a class="link" href="requests-page.php">Blood Donations </a>
                </span>
            </div>
        </div>
        <div class="circle">
            <div class="button" style="vertical-align:middle"><span><a class="link" href="charity.php">Other Donations 
                </a></span></div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.js"></script>   
    </body>
</html>
 ';
    } else {
            header('location: home.php');
    }
    ?>
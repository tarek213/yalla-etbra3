<?php error_reporting(0);
    ini_set('display_errors',0);
 ?>
<?php include('server.php') ?>
<?php
    if($_SESSION['success']=="done"){
        $_SESSION['success'] = "done1";
    } else if ($_SESSION['success'] == "ch"){
        $_SESSION['success'] = "ch1";
    }
    else if ($_SESSION['success'] == "hos"){
        $_SESSION['success'] = "hos1";
    } else if ($_SESSION['success'] == "done1"){
        header('location: choices-page.php');
    }
else if ($_SESSION['success'] == "hos1"){
        header('location: make request.php');
    }
else if ($_SESSION['success'] == "ch1"){
        header('location: charities.php');
    }
 else if ($_SESSION['success'] == "logout1"){
        $_SESSION['success'] = "noooooo!";
        header('location: home.php');
    }
    else{
        $_SESSION['success'] = "noooooo!";
    }
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Yalla Etbra3</title>
        <meta name="description" content="my website is to help you get work easily">
        <link rel="icon" type="image/png" href="img/logo.png">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/template.css">
        <link rel="stylesheet" type="text/css" href="css/Home.css">
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
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="SignUp.php">SignUp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
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
        <header class="row">
            <div class="col-2 center ml-auto mr-auto my-4">
                <img src="img/logo.png" class="img-fluid text-center">
            </div>
        </header>
        <section>
            <form class="col-lg-5 col-md-8 col-xs-10 text-center mx-auto login" method="post" action="Home.php">
                <?php include('errors.php'); ?>
                <div class="form-group">
                    <label for="Email" class="col-12">Email address</label>
                    <input type="email" class="login-email textF col-9" id="Email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="Password" class="col-12">Password</label>
                    <input type="password" class="login-pass textF col-9" id="Password" placeholder="Enter Password" name="password">
                </div>
                <input type="submit" value="Login" class="submit col-4" name="login_user">
            </form>
        </section>
        <section class="about row" id="about">
            <div class="col-lg-6 col-md-10 col-xs-11 about-card text-center ml-auto mr-auto">
                <h2 class="about-header col-6 ml-auto mr-auto">About Yalla Etbra3</h2>
                <p class="about-p">Yalla Etbra3 is a website that aims to help the people in many ways <br> -we help people who needs blood donation , hospitals can make a request whenever they have someone who had accident or anything that requires a blood transfusion, and people with the same blood type will get notification so they can go and help by donating.<br> -we help peaple who needs another donations or have special needs , at anytime you can communicae with any charity and offer things you wanna donate and they will communicate with you and come to take these things
                </p>
            </div>
        </section>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>

    </html>

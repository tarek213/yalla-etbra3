<?php include('server.php') ?>

<?php 
    if($_SESSION['success'] != "hos1"){
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
        <link rel="stylesheet" type="text/css" href="css/make%20req.css">
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
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.js"></script>   
        
        
        
        
        <p>
            <button class="btn btn-primary btn2" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Make Request
            </button>
        </p>
        <?php include('errors.php'); ?>
        <div class="collapse" id="collapseExample">

            <form class="enter" method="get" action="make request.php">
                
                <div class="form-group">
                    <label for="exampleInputEmail1" class="firstlab"> Blood Type</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="bloodType">
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="secondlab">Number Of People</label>
                    <input type="text" class="form-control" id="nop" placeholder="Enter The Number" name="number">
                </div>
                <button type="submit" class="btn btn-primary btn1" name="makereq">Submit</button>
            </form>
        </div>
    </body>
</html>
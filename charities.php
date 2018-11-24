<?php include('server.php') ?>

<?php 
    if($_SESSION['success'] != "ch1"){
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
    <link rel="stylesheet" type="text/css" href="css/charities.css">
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

    <div class="row">
        <?php
    $counter=1;
$currentcharity=strtolower($_SESSION['charity']);
        $db = mysqli_connect('localhost', 'root', '', "yalla_etbra3");
        $r = mysqli_query($db, "SELECT * FROM donations_msgs");
        while($row  = mysqli_fetch_array($r)){
            $q=strtolower($row['charity']);
            if($q==$currentcharity ){
                echo '
        <div class="card col-3">
            <div class="front">
                <header> "Request '. $counter++ .' "</header>
                <p>
                    Name :
                </p>
                <p>'. $row['user_name'] .'</p>
                <p>
                    Phone number:
                </p>
                <p>'. $row['phone_num'].'</p>
            </div>

            <div class="back">
                <header> Content</header>
                            <div class="aa">
                <p class="msg">'. $row['msg'] .'</p>
                </div>
                <form method="post">
                <input type="hidden" name="del" value="'.$row['msg'] .'">
               <input class="accept" type="submit" name="acceptdon" value="Accept">
               </form>
            </div>
        </div>'; 
         }
        }
        ?>

    </div>
</body>

</html>

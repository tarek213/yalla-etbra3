<?php include('server.php') ?>
<?php
    $_SESSION['success'] = "noooooo!"
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sign Up</title>
        <meta name="description" content="Yalla etbra3 is a website that makes the communication between hospitals and donators easier">
        <link rel="icon" type="image/png" href="img/logo.png">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/template.css">
        <link rel="stylesheet" type="text/css" href="css/SignUp.css">
    </head>
    <body>
        <nav class=" navbar-expand-lg navbar navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#"> <img class="logo" src="img/logo.png"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">SingUp<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Home.php#about">About</a>
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
        
        <div class="signup mx-auto text-center">
            <form method="post" action="SignUp.php  ">
                <?php include('errors.php'); ?>
                <div class="row">
                    <div class="col-5 offset-1 containForm">
                        <input type="text" class="form-control textF textFName" placeholder="" id="Fname" name="FirstName">
                        <label class="lbl-name" for="Fname">First Name</label>

                    </div>
                    <div class="col-5">
                        <input type="text" class="form-control textF textFName" id="Lname" placeholder="" name="LastName">
                        <label class="lbl-name" for="Lname">Last Name</label>

                    </div>
                </div>
                <div class="row">
                    <div class="col-10 mx-auto containForm">
                        <input type="email" class="form-control textF" id="Email" placeholder="" name="Email">
                        <label class="lbl-email" for="Email">Email</label>

                    </div>
                </div>
                <div class="row ">
                    <div class="col-10 mx-auto containForm">
                        <input type="password" class="form-control textF" id="Pass" placeholder="" onkeyup='check();' name="password_1" />
                        <label class="lbl-password" for="Pass">Password</label>

                    </div>
                </div>
                <div class="row">
                    <div class="col-10 mx-auto containForm">
                        <span id='message' class="verify ml-1 fas" style="visibility: hidden"></span>
                        <input type="password" class="form-control textF ConfirmPass" id="ConfirmPass" placeholder="" onkeyup='check();' name="password_2" />
                        <label class="lbl-confPassword" for="ConfirmPass">Confirm Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 mx-auto">
                        <input type="tel" minlength="11" maxlength="11" class="form-control textF" id="PhoneNum" placeholder="" name="PhoneNumber">
                        <label class="lbl-phone" for="PhoneNum">Phone Number</label>

                    </div>
                </div>
                <div class="form-group col-10 mx-auto">
                <label for="County">Choose City</label>
                    <select class="form-control signup-blood" id="County" name="City">
                        <option>Alexandria</option>
                        <option>Cairo</option>
                        <option>Aswan</option>
                        <option>Ismailia</option>
                        <option>Asyut</option>
                        <option>Hurghada</option>
                        <option>Bani Sweif</option>
                        <option>Port Said</option>
                        <option>Giza</option>
                        <option>Mansoura</option>
                        <option>Sinaa</option>
                        <option>Sohag</option>
                        <option>Fayoum</option>
                        <option>Kaliobeya</option>
                        <option>Qena</option>
                        <option>Kafr El Sheikh</option>
                        <option>Monoufia</option>
                        <option>Menia</option>
                        <option>matroh</option>
                        <option>al behera</option>
                        <option>al gharbia</option>
                        <option>sharm-shihk</option>
                    </select>
                </div>
                <div class="form-group col-10 mx-auto">
                <label for="exampleFormControlSelect1">Blood Type</label>
                    <select class="form-control signup-blood" id="exampleFormControlSelect1" name="BloodType">
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
                <div class="row btn1">
                    <input type="submit" value="SingUp" class="col-3 mx-auto signup-btn" name="signupBtn">
                </div>
            </form>
        </div>
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/fontawesome-all.js"></script>
        <script src="js/signup.js"></script>
    </body>
</html>
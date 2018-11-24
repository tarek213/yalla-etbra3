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
    <link rel="stylesheet" type="text/css" href="css/charity.css">
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
    <div class="container-fluid text-center">
        <div class="row">
            <div class="card col-lg-3 col-md-5 col-xs-12 col-sm-12 " style="width: 18rem;">
                <img class="card-img-top" src="img/rsala.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Resala Association</h5>
                    <p class="card-text">Resala Association for Charity is charity doing a lot of activities in Egypt, was established in 1999 as a movement student at the Faculty of Engineering, Cairo University and then took up as a charity in ..</p>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DonateResala">Donate Now</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AboutResala">More Info</button>
                </div>
            </div>
            <div class="card col-lg-3 col-md-5 col-xs-12 col-sm-12 offset-md-1  offset-xs-0" style="width: 18rem;">
                <img class="card-img-top" src="img/orman.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Orman Association</h5>
                    <p class="card-text">An Egyptian non-governmental organization, established in 1993, aims to serve all categories of Egyptian society in need without any religious or political discrimination, in an institutionalized....</p>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DonateOrman">Donate Now</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AboutOrman">More Info</button>
                </div>
            </div>
            <div class="card col-lg-3 col-md-5 col-xs-12 col-sm-12 offset-md-1  offset-xs-0" style="width: 18rem;">
                <img class="card-img-top" src="img/MagdyYacoub.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Magdy Yaqoub Foundation</h5>
                    <p class="card-text">The establishment of an international medical center for excellence offering the highest level of free basic health services to the lowest of the highest international standards. To this end, our activities include...</p>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DonateMY">Donate Now</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AboutMY">More Info</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card col-lg-3 col-md-5 col-xs-12 col-sm-12 " style="width: 18rem;">
                <img class="card-img-top" src="img/Misr_El-Kheir.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Misr El Kheir Foundation</h5>
                    <p class="card-text">Misr El Kheir Foundation (MEK) is a non-profit development institution established in 2007 with the objective of developing the Egyptian individual in a comprehensive manner. Five key areas have been..</p>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DonateMistKH">Donate Now</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AboutMisrKH">More Info</button>
                </div>
            </div>
            <div class="card col-lg-3 col-md-5 col-xs-12 col-sm-12 offset-md-1  offset-xs-0" style="width: 18rem;">
                <img class="card-img-top" src="img/57357.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">57357 foundation</h5>
                    <p class="card-text">The Children’s Cancer Hospital Egypt 57357(CCHE) widely known as Hospital 57357 is a unique healthcare institution and an ultimate example of what can be achieved when people work together for a common goal...</p>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Donate57357">Donate Now</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#About57357">More Info</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal Resala -->
    <div class="modal fade text-center" id="AboutResala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Resala Association</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <h4 class="mx-auto">ABOUT</h4>
                    <p>
                        Resala Association for Charity is charity doing a lot of activities in Egypt, was established in 1999 as a movement student at the Faculty of Engineering, Cairo University and then took up as a charity in 29/5/2000 and have many branches that spread at the level of the Republic and of more than 60 branches.
                    </p>
                    <h4 class="mx-auto">ACTIVITIES</h4>
                    <p>
                        - children of cancer<br> - medical message center<br> - foreign convoys<br> - charity projects<br> - helping poor families<br> - resala training centers<br> - literacy<br>
                    </p>
                    <h4 class="mx-auto">BRANCHES</h4>
                    <p>
                        Alexandria: Phone: 034193501- 034193500 - 034193599<br> Giza-Fesal: Phone: 02-37891400<br> Giza-Doky : Phone: 37629874-37628948-3728957-37629870<br> Cairo-Maady: Phone: 27068800 - 27068801 - 27068810

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Orman -->
    <div class="modal fade text-center" id="AboutOrman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">El Orman Association</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <h4 class="mx-auto">ABOUT</h4>
                    <p>
                        An Egyptian non-governmental organization, established in 1993, aims to serve all categories of Egyptian society in need without any religious or political discrimination, in an institutionalized manner that emphasizes the role of civil work in the economic and social development of societies. The association relies solely on donations in kind and cash from Egyptians. </p>
                    <h4 class="mx-auto">The mission of the Association</h4>
                    <p> is to provide non-traditional quality charitable services targeted within a specific time frame, to move the needy segments from the Department of Need to the Production and Sufficiency Department


                    </p>
                    <h4 class="mx-auto">ACTIVITIES</h4>
                    <p>
                        - RECONSTRUCTION OF HOUSES<br> - INSTALLATION OF WATER METER<br> - DISTRIBUTION OF LIVESTOCK HEADS<br> - STALLS<br> - REPAYMENT OF THE DEBTS OF THE GARMIN<br> - ORMAN HEALING HOSPITAL<br> - HEART OPERATIONS<br>
                    </p>
                    <h4 class="mx-auto">BRANCHES</h4>
                    <p>
                        Alexandria-ganaklis: Phone: 035849702 - 035849703 - 035849704<br> Alexandria-Kafr abdo: Phone: 035429737 - 035439742 - 035413851 - 01144503159<br> Pyramid: Phone: 35820812 - 35820816 - 35864528 - 01155255777<br> October: Phone: 38354303 - 01155566811 - 01111135499<br> el dokki: Phone: 37600209 - 37600213 - 37600235<br>


                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal MagdyYacoub-->
    <div class="modal fade text-center" id="AboutMY" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Magdy Yaqoub Foundation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <h4 class="mx-auto">ABOUT</h4>
                    <p>
                        The establishment of an international medical center for excellence offering the highest level of free basic health services to the lowest of the highest international standards. To this end, our activities include:<br> Establish a heart center in Aswan that provides free medical treatment to the community as a whole.<br> The establishment of the International Heart Research Center, which contributes to the advancement of science and technology worldwide<br> The development of the second generation of local generation of physicians, scientists and biologists with accumulated experience in this vital field<br>
                    </p>
                    <h4 class="mx-auto">BRANCHES</h4>
                    <p>
                        For Donations: 19731 <br> For Information: 19731 <br> Mail: info@myf-egypt.org<br>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


    <!-- Modal Misr_El-Kheir-->
    <div class="modal fade text-center" id="AboutMisrKH" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Magdy Yaqoub Foundation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <h4 class="mx-auto">ABOUT</h4>
                    <p>
                        Misr El Kheir Foundation (MEK) is a non-profit development institution established in 2007 with the objective of developing the Egyptian individual in a comprehensive manner. Five key areas have been selected for human development namely: Health, Education, Scientific Research, Social Solidarity and Aspects of Life. Our vision is: to become a pioneering sustainable development organization to be heeded internationally; our mission is to contribute to the development of individuals and to serve them in the hope of eliminating unemployment, illiteracy, poverty, and disease.
                    </p>
                    <h4 class="mx-auto">Vission & Mission</h4>
                    <p>
                        Our Vision<br> To become a pioneering sustainable development organization to be heeded internationally.<br> Our Mission<br> Comprehensive Human Development through the implementation of projects in order to diminish the levels of illness, poverty, hunger, illiteracy, and unemployment.<br> Our Goal<br> Participation in building and serving the human being in the fields of health, education, scientific research and innovation, social solidarity and aspects of life, in the hope of eliminating unemployment, illiteracy, poverty and disease.<br>
                    </p>
                    <h4 class="mx-auto">CONTACT</h4>
                    <p>
                        Phone: 16140<br> EMail: info@misrelkheir.org<br>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal 57357-->
    <div class="modal fade text-center" id="About57357" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Magdy Yaqoub Foundation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <h4 class="mx-auto">ABOUT</h4>
                    <p>
                        The Children’s Cancer Hospital Egypt 57357(CCHE) widely known as Hospital 57357 is a unique healthcare institution and an ultimate example of what can be achieved when people work together for a common goal. The people of Egypt and friends from all over the world and most particularly in the Arab World have contributed generously to the establishment of the hospital which has been completely built by donations. Egyptians from all walks of life rallied around the setting up of a state of the art pediatric oncology hospital to achieve the dream of a better tomorrow for their children with cancer.
                    </p>
                    <h4 class="mx-auto">Vission & Mission</h4>
                    <p>
                        Our Mission<br> Building a sustainable foundation to prevent and combat cancer through Research, Smart education and Quality healthcare provided with passion and justice to alleviate the suﬀering of children with cancer and their families Free of charge.<br> Vision
                        <br> To be the unique worldwide icon of change towards a cancer‐ free childhood<br>
                    </p>
                    <h4 class="mx-auto">CONTACT</h4>
                    <p>
                        Phone: 25351500<br> EMail: info@57357.org<br>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


    <!-- Donate Form Resala !-->
    <div class="modal fade text-center" id="DonateResala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Resala Association</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="signup mx-auto text-center">
                        <form method="post">
                            <?php include('errors.php'); ?>
                            <div class="row roww">
                                <label class="lbl-to col-2" for="TO">To:</label>
                                <input type="text" class="col-9 form-control textF textFTO" value="RESALA ASSOCIATION" id="TO" readonly name="TO">
                            </div>
                            <div class="row roww">
                                <label class="lbl-to col-2" for="Name">Name:</label>
                                <input type="text" class="col-9 form-control textF textFName" placeholder="Your name" id="Name" name="Name">
                            </div>
                            <div class="row">
                                <label class="lbl-to col-10 mx-auto" for="Mess">Your Message:</label>
                            </div>
                            <div class="row">
                                <textarea type="text" class="col-9 mx-auto form-control textF textFMEss" placeholder="Your Message" id="Mess" name="Mess" height="200px"></textarea>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-danger" data-toggle="modal" name="DonateResala" data-target="#DonateResala" value="send">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Donate Form Orman !-->
    <div class="modal fade text-center" id="DonateOrman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Orman Association</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="signup mx-auto text-center">
                        <form method="post">
                            <?php include('errors.php'); ?>
                            <div class="row roww">
                                <label class="lbl-to col-2" for="TO">To:</label>
                                <input type="text" class="col-9 form-control textF textFTO" value="Orman Association" id="TO" readonly name="TO">
                            </div>
                            <div class="row roww">
                                <label class="lbl-to col-2" for="Name">Name:</label>
                                <input type="text" class="col-9 form-control textF textFName" placeholder="Your name" id="Name" name="Name">
                            </div>
                            <div class="row">
                                <label class="lbl-to col-10 mx-auto" for="Mess">Your Message:</label>
                            </div>
                            <div class="row">
                                <textarea type="text" class="col-9 mx-auto form-control textF textFMEss" placeholder="Your Message" id="Mess" name="Mess" height="200px"></textarea>
                            </div>
                            <div class="modal-footer">
                        <input type="submit" class="btn btn-danger" data-toggle="modal" name="DonateOrman" data-target="#DonateOrman" value="send">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Donate Form MY !-->
    <div class="modal fade text-center" id="DonateMY" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Magdy Yaqoub Foundation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="signup mx-auto text-center">
                        <form method="post">
                            <?php include('errors.php'); ?>
                            <div class="row roww">
                                <label class="lbl-to col-2" for="TO">To:</label>
                                <input type="text" class="col-9 form-control textF textFTO" value="Magdy Yaqoub Foundation" id="TO" readonly name="TO">
                            </div>
                            <div class="row roww">
                                <label class="lbl-to col-2" for="Name">Name:</label>
                                <input type="text" class="col-9 form-control textF textFName" placeholder="Your name" id="Name" name="Name">
                            </div>
                            <div class="row">
                                <label class="lbl-to col-10 mx-auto" for="Mess">Your Message:</label>
                            </div>
                            <div class="row">
                                <textarea type="text" class="col-9 mx-auto form-control textF textFMEss" placeholder="Your Message" id="Mess" name="Mess" height="200px"></textarea>
                            </div>
                            <div class="modal-footer">
                        <input type="submit" class="btn btn-danger" data-toggle="modal" name="DonateMY" data-target="#DonateMY" value="send">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Donate Form Misr_El-Kheir!-->
    <div class="modal fade text-center" id="DonateMistKH" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Misr El Kheir Foundation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="signup mx-auto text-center">
                        <form method="post">
                            <?php include('errors.php'); ?>
                            <div class="row roww">
                                <label class="lbl-to col-2" for="TO">To:</label>
                                <input type="text" class="col-9 form-control textF textFTO" value="Misr El Kheir Foundation" id="TO" readonly name="TO">
                            </div>
                            <div class="row roww">
                                <label class="lbl-to col-2" for="Name">Name:</label>
                                <input type="text" class="col-9 form-control textF textFName" placeholder="Your name" id="Name" name="Name">
                            </div>
                            <div class="row">
                                <label class="lbl-to col-10 mx-auto" for="Mess">Your Message:</label>
                            </div>
                            <div class="row">
                                <textarea type="text" class="col-9 mx-auto form-control textF textFMEss" placeholder="Your Message" id="Mess" name="Mess" height="200px"></textarea>
                            </div>
                            <div class="modal-footer">
                        <input type="submit" class="btn btn-danger" data-toggle="modal" name="DonateMasrKH" data-target="#DonateMasrKH" value="send">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    <!-- Donate Form 57357!-->
    <div class="modal fade text-center" id="Donate57357" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">57357 Foundation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="signup mx-auto text-center">
                        <form method="post">
                            <?php include('errors.php'); ?>
                            <div class="row roww">
                                <label class="lbl-to col-2" for="TO">To:</label>
                                <input type="text" class="col-9 form-control textF textFTO" value="57357 foundation" id="TO" readonly name="TO">
                            </div>
                            <div class="row roww">
                                <label class="lbl-to col-2" for="Name">Name:</label>
                                <input type="text" class="col-9 form-control textF textFName" placeholder="Your name" id="Name" name="Name">
                            </div>
                            <div class="row">
                                <label class="lbl-to col-10 mx-auto" for="Mess">Your Message:</label>
                            </div>
                            <div class="row">

                                <textarea type="text" class="col-9 mx-auto form-control textF textFMEss" placeholder="Your Message" id="Mess" name="Mess" height="200px"></textarea>
                            </div>
                            <div class="modal-footer">
                        <input type="submit" class="btn btn-danger" data-toggle="modal" name="Donate57357" data-target="#Donate57357" value="send">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>

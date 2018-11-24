<?php

session_start();
// initializing variables
$firstname = "";
$lastname="";
$email    = "";
$phonenumber="";
$city="";
$bloodtype="";
$errors = array(); 
$number = 0;
$bloodtypereq="";
$hospitalName = "";
$charityName="";
$currentUser = "";
$userName = "";
$Message="";
$Assosiation="";
// connect to the database
$db = mysqli_connect('localhost', 'root', '', "yalla_etbra3");

if (isset($_POST['signupBtn'])) {
  // receive all input values from the form
    $firstname = mysqli_real_escape_string($db, $_POST['FirstName']);
    $lastname = mysqli_real_escape_string($db, $_POST['LastName']);
    $email = mysqli_real_escape_string($db, $_POST['Email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $phonenumber=mysqli_real_escape_string($db, $_POST['PhoneNumber']);
    $city=mysqli_real_escape_string($db, $_POST['City']);
    $bloodtype=mysqli_real_escape_string($db, $_POST['BloodType']);
    
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "first name is required"); }
    if (empty($lastname)) { array_push($errors, "last name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
    if (empty($phonenumber)) { array_push($errors, "phone number is required"); }
    if (empty($city)) { array_push($errors, "city is required"); }
    if (empty($bloodtype)) { array_push($errors, "bloodtype is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (Admin,first_name,second_name, email, password,phone_number,country,blood_type,hospital,charity) 
  			  VALUES('FALSE','$firstname','$lastname' ,'$email', '$password', '$phonenumber','$city','$bloodtype','FALSE','FALSE')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
    $_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: choices-page.php');
  }
} 
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
      $_SESSION['success'] = "n";
    $r = mysqli_query($db, "SELECT * FROM users");
        while($row  = mysqli_fetch_array($r)){
            if($row['email']===$email){
                $currentUser = $row['email'];
                if($row['hospital'] == 1){
                    $_SESSION['success'] = "hos";
                    $_SESSION['hospitalname']=$row['first_name'];
                    $hospitalName = $row['first_name'];
                    header('location: make request.php');
                    break;
                } else if ($row['charity'] == 1){
                    $_SESSION['success'] = "ch";
                    $_SESSION['charity']=$row['first_name'];
                        $charityName=$row['first_name'];
                            
                    header('location: charities.php');
                    break;
                } else {
                    $_SESSION['success'] = "done";
                    header('location: choices-page.php');
                    break;
                }
            }
        }
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
if(isset($_POST['logout'])){
    $_SESSION['success'] = "logout";
}
if (isset($_GET['makereq'])){
    $hospitalName = $_SESSION['hospitalname'];
    $number = mysqli_real_escape_string($db, $_GET['number']);
  $bloodtypereq = mysqli_real_escape_string($db, $_GET['bloodType']);
    if (empty($number)) {
  	array_push($errors, "Please put number of donators");
  } 
    if ($number == 0) {
  	array_push($errors, "Please put number of donators > 0");
  }
    if (count($errors) == 0) {
        $query = "INSERT INTO blood_requests (hospital_name,blood_type,number_needed) 
        VALUES('$hospitalName','$bloodtypereq','$number')";
        mysqli_query($db, $query);
        $date = date("Y-m-d h:i:sa");
        $r = mysqli_query($db, "SELECT * FROM users");
        while($row  = mysqli_fetch_array($r)){
            if($row['blood_type'] == $bloodtypereq){
                $mail = $row['email'];
                $query = "INSERT INTO blood_requests1 (date,hospital_name,user,number) 
  			  VALUES('$date','$hospitalName','$mail','$number')";
                mysqli_query($db, $query);
            }
        }
        header('location: make request.php');
    }
} 
        
    if (isset($_POST['DonateResala']) || isset($_POST['DonateOrman']) || isset($_POST['DonateMY']) || isset($_POST['DonateMasrKH']) || isset($_POST['Donate57357'] )){
        $userName = mysqli_real_escape_string($db, $_POST['Name']);
        $Message = mysqli_real_escape_string($db, $_POST['Mess']);
        $Assosiation = mysqli_real_escape_string($db, $_POST['TO']);
        if (empty($userName)) {
            array_push($errors, "Please put Your Name to be able to communicate with you");
        } 
        if (empty($Message)) {
            array_push($errors, "Please Enter Your Message");
        }
        if (empty($Assosiation)) {
            array_push($errors, " ");
        }
        if (count($errors) == 0) {
            $r = mysqli_query($db, "SELECT * FROM users");
            while($row  = mysqli_fetch_array($r)){
                if($row['email']==$_SESSION['email']){
                    $phonenumber = $row['phone_number'];
                }
            }
            $query = "INSERT INTO donations_msgs (user_name,charity,phone_num,msg) 
            VALUES('$userName','$Assosiation','$phonenumber','$Message')";
            mysqli_query($db, $query);
                        header('location: charity.php');

        }       
    }
if(isset($_POST['acceptdon']) ){
    $secretmsg= mysqli_real_escape_string($db, $_POST['del']);
//echo $secretmsg;
    $del="DELETE FROM donations_msgs WHERE msg='$secretmsg'";
    mysqli_query($db,$del);
    header('location: charities.php');
}
if(isset($_POST['a'])){
    $subdate= mysqli_real_escape_string($db, $_POST['done']);
    $numberofreq=0;
    echo $subdate;
    $cccemail=$_SESSION['email'];
    $del="DELETE FROM blood_requests1 WHERE date='$subdate' AND user='$cccemail'";
    mysqli_query($db,$del);
    $r = mysqli_query($db, "SELECT * FROM blood_requests1");
            while($row  = mysqli_fetch_array($r)){
            if($row['date']==$subdate){
            $numberofreq=$row['number']-1;
                break;
            }
            }
    
    $update="UPDATE blood_requests1 SET number=$numberofreq WHERE date='$subdate'";
    mysqli_query($db,$update);
    header('location: requests-page.php');
}
 
?>


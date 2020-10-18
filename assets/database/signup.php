<?php

session_start();
header('location:../../index.php');
$con = mysqli_connect('localhost', 'root');
if ($con) {
    echo "Connection Successful";
} else {
    echo "Failed!";
}

mysqli_select_db($con, 'LoginAndRegistration');

$registerUsername = $_POST['registerUsername'];
$email = $_POST['email'];
$phNumber = $_POST['phNumber'];
if (strlen($phNumber) < 10 || strlen($phNumber) > 10) {
    $_SESSION['tag'] = "danger";

    $_SESSION['msgType'] = "";
    $_SESSION['msg'] = "Invalid Phone Number";
} else {
    $gender = $_POST['gender'];
    $registerPassword = $_POST['registerPassword'];
    $registerCPassword = $_POST['registerCPassword'];
    if ($registerPassword == $registerCPassword) {
        $EncryptPassword = md5($registerPassword);
        $query = "select * from users where username ='$registerUsername' && password='$registerPassword' ";

        $result = mysqli_query($con, $query);
        $haveOrNot = mysqli_num_rows($result);
        if ($haveOrNot == 1) {
            $_SESSION['tag'] = "danger";

            $_SESSION['msgType'] = " Try Again! ";
            $_SESSION['msg'] = " Already Have an Account ";
        } else {
            $qy = "insert into users(username, email, ph, gender, password) values ('$registerUsername','$email','$phNumber','$gender','$EncryptPassword') ";
            $_SESSION['tag'] = "success";

            $_SESSION['msgType'] = " Successfully SignUp ";
            $_SESSION['msg'] = " Now you can login ";
            mysqli_query($con, $qy);
        }
    } else {
        $_SESSION['tag'] = "danger";

        $_SESSION['msgType'] = "";
        $_SESSION['msg'] = "Don't match password and confirm password";
    }
    
}

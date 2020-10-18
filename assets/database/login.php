<?php

session_start();
$con = mysqli_connect('localhost', 'root');
if ($con) {
    echo "Connection Successful";
} else {
    echo "Failed!";
}

mysqli_select_db($con, 'LoginAndRegistration');

$username = $_POST['username'];
$password = $_POST['password'];
$EncryptPassword = md5($password);

$checkQuery = "select * from users where username ='$username' && password='$EncryptPassword' ";

$result = mysqli_query($con, $checkQuery);
$haveOrNot = mysqli_num_rows($result);
if ($haveOrNot == 1) {
    $_SESSION['tag']="success";
    $_SESSION['msgType'] = " LogIn Successful! ";

    $_SESSION['msg'] = " Now You Can Do Anything....... ";
    $_SESSION['username'] = $username;
    header('location:../../home.php');
} else {
    
    $_SESSION['tag']="danger";
    $_SESSION['msgType'] = "Try Again!";

    $_SESSION['msg'] = " Wrong credentials ";
    header('location:../../index.php');
}

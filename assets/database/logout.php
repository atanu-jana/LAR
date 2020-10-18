<?php
session_start();
$_SESSION['tag']="success";
$_SESSION['msgType'] = " LogOut Successful! ";

$_SESSION['msg'] = " Visit Again :) ";
header('location:../../index.php');
session_destroy();

?>
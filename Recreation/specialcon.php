<?php
require_once 'connection.php';
$UserName =$_POST['UserName'];
$password =$_POST['password'];

$sql="SELECT * FROM doctors WHERE UserName='$UserName',password='$password'";

$result = $con->query($sql);

if($result->num_rows==1) {
    session_start();
    $_SESSION['UserName'] = $UserName;
    $_SESSION['password'] = $password;

    $_SESSION['Log In'] = true;
    header('location:newlogin.php');
 }else{
   //user does not exist;
 }
 $con->close();
?>









//<?php

if(!isset($_SESSION['currentLogDoctorId'])) {

    header("Location: welcome.php");

}


?>

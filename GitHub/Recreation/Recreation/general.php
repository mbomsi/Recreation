<?php
require_once 'connection.php';
$UserName =$_POST['UserName'];
$password = $_POST['password'];

$sql="INSERT INTO doctors(UserName, password) VALUES ('$UserName','$password')";

if($con->query($sql) === TRUE){
    echo "Account created successfully";
    header('location:welcome.php');
}else{
    echo "Error".$sql."<br>".$con->error;
}
$con->close();
?>;

<!--<style>-->
    body{
        background-image: url("pharmacy-technician-program.jpg");
        background-repeat: no-repeat;
        background-size: cover;

    }
<!--</style>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="general.css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    <div class="arrow">
        <label for ="UserName" >id</label>
        <input name="UserName" id="UserName" Required type="text">
        <label for ="password" >id</label>
        <input name="password" id="password" Required type="password">
    </div>
</form>
</body>
</html>


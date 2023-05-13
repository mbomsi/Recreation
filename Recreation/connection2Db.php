<?php
$servername="localhost";
$username="root";
$password ="";
$dbname = "pharmacy";

$con = mysqli_connect($servername,$username,$password,$dbname);

if(mysqli_connect_error()){
    echo "connect failed";
    exit();
}
echo "connection success!";
?>;
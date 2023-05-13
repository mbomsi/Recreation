<?php
if (isset($_POST["id"])){
    $id = $_GET["id"];

    $servername="localhost";
    $username="root";
    $password ="";
    $dbname = "pharmacy";

    $connection =  new mysqli($servername,$username,$password,$dbname);
    $sql =  "DELETE FROM antibiotics WHERE id=$id";
    $connection->query($sql);



}
    header("location:index.php");



?>;
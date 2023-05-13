<?php
 session_start();
include "connection.php";
global $con;

if (isset($_POST['login'])){

    $UserName= $_POST['UserName'];
    $Password= $_POST['Password'];

    $sql = "SELECT * FROM doctors WHERE UserName ='$UserName' AND password ='$Password'";
    $stmt =$con->query($sql);

    if ($stmt) {

        if ($stmt->num_rows > 0) {
            $doctor = $stmt->fetch_object();

            session_regenerate_id();
            $_SESSION['logged'] = TRUE;
            $_SESSION['currentLogDoctorId'] = $doctor->id;

            header("location: newlogin.php");

        } else{
                     header("location:welcome.php?error=  Incorrect UserName or Password");
        }
    }else{
                header("location:welcome.php?error=  Incorrect UserName or Password");
    }
}

//    if (empty($UserName)){
//        header("location:welcome page.html?error= UserName is required");
//    }elseif (empty($Password)){
//        header("location:welcome page.html?error= Password is required");
//
//    }else{
//        $stmt = $conn->prepare("SELECT *FROM doctors WHERE UserName=?");
//        $stmt->execute([$UserName]);
//
//        if ($stmt->rowCount()==1){
//             $user = $stmt->fetch();
//             $user_id =$user['id'];
//            $user_UserName =$user['UserName'];
//            $user_Password =$user['Password'];
//
//            if ($UserName==$user_UserName){
//                 if (password_verify($Password,  $user_Password)){
//                     $_SESSION['user_id'] = $user_id;
//                     $_SESSION['user_UserName'] = $user_UserName;
//                     $_SESSION['user_Password'] = $user_Password;
//                     header("location:index1.php");
//                 }else{
//                     header("location:welcome page.html?error=  Incorrect UserName or Password");
//                 }
//            }else{
//                header("location:welcome page.html?error=  Incorrect UserName or Password");
//            }
//        }else{
//            header("location:welcome page.html?error=  Incorrect UserName or Password");
//        }
//    }
//}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="welcome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
<section>
    <div class="form-box">
        <div class="form-value">
            <form action="" method="post">
                <h2>Login</h2>
                <div class="input-box">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text"  id="UserName" name="UserName" required>
                    <label for="UserName">UserName</label>
                </div>
                <div class="input-box">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="Password"  id="Password" name="Password" required>
                    <label for="Password">Password</label>
                </div>
                <div class="forget">
                    <label ><input type="checkbox" >Remember Me  <a href="#">Forget Password</a></label>

                </div>
                <button name="login"> Log In</button>
                <div class="register">
                    <p> Dont have an account <a href="generalpage.php">Register</a></p>
                </div>
            </form>

        </div>
    </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

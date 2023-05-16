<?php

$servername = "localhost";
$username="root";
$password ="";
$dbname = "pharmacy";

$connection =  new mysqli($servername,$username,$password,$dbname);

$id="";
$Names="";
$email ="";
$Phone="";
$shift="";

$errorMessage="";
$successMessage="";
$result="";

if ($_SERVER['REQUEST_METHOD']=='GET'){

    if (!isset($_GET["id"]) ) {
        header("location:index1.php");
        exit;
    }
    $id = $_GET["id"];
    $sql = "SELECT * FROM pharmacist WHERE id= $id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row){
        header("location:index1.php");
        exit;
    }

    $Names = $row["Names"];
    $email = $row["email"];
    $Phone = $row["Phone"];
    $shift = $row["shift"];

}
else {

    $id = $_POST["id"];
    $Names = $_POST["Names"];
    $email= $_POST["email"];
    $Phone= $_POST["Phone"];
    $shift = $_POST["shift"];



    do{
        if (empty($Names) || empty($email) || empty($Phone) || empty($Shift)){
            $errorMessage = "All fields are required";
            break;
        }

        $sql ="UPDATE pharmacist SET Names='$Names',email='$email',Phone='$Phone',shift='$shift' WHERE id=$id";

        $result = $connection->query($sql);

        if (!$result){
            $errorMessage = "Invalid query" .$connection->error;
            break;
        }

        $successMessage ="pharmacist updated successfully";

        header("location:index1.php");
        exit;

    } while (false);

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Drugs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="cont">
    <h2>Adding a new worker</h2>

    <?php
    if (!empty($errorMessage)){
        echo "
                   <div class='alert alert-danger  alert-dismissible fade show' role='alert'>
                   <strong>$errorMessage</strong>
                   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                   </div>
                   ";
    }
    ?>
    <form action="" method="post">
        <input  type="hidden"  name="id" value="<?php echo $id;  ?>">


        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Names</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Names" value="<?php echo $Names;  ?> ">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">email</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" name="email" value="<?php echo $email;  ?> ">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Phone</label>
            <div class="col-sm-6">
                <input type="number" class="form-control" name="Phone" value="<?php echo $Phone; ?> ">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">shift</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="shift" value="<?php echo $shift;  ?> ">
            </div>
        </div>



        <?php

        if (!empty($successMessage)){
            echo "
                   <div class='row mb-3'>
                     <div class='offset-sm-3 col-sm-6'>
                   <div class='alert alert-success  alert-dismissible fade show' role='alert'>
                   <strong>$successMessage</strong>
                   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                       </div>
                     </div>
                   </div>
                   ";
        }
        ?>
        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="index1.php" role="button"> Cancel</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>


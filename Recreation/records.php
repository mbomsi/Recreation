<?php
$con=mysqli_connect("localhost","root","","pharmacy");

if (isset($_POST["submit"])){
    $name=$_POST["name"];
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $validImageExtensions = ['jpg','jpeg','png'];
        $imageExtension = explode('.',$fileName);
        $imageExtension = strtolower(end($imageExtension));
        if (!in_array($imageExtension,$validImageExtensions)){
            echo
            "<script> alert('Invalid Image Extension');</script>";
        }
       // else if($fileSize > 1000000){
           // echo
            //"<script> alert('Invalid Image Size');</script>";
        //}
        else{
            $newImageName = uniqid();
            $newImageName  .= '.' . $imageExtension;

            move_uploaded_file($tmpName,'./image/'.$newImageName);
            $query = "INSERT INTO images(image,name) VALUES('$newImageName','$name')";
            mysqli_query($con,$query);
            echo
            "<script> 
                 alert('Successfully added');
                 document.location.href= 'data.php';
                 </script>";
        }

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Image</title>
</head>
<body>
     <form method="post"  class="" action="" enctype="multipart/form-data" autocomplete="off">
             Name:<input type="text" name="name" required value=""><br><br><br>
             <input type="file" name="image" accept=".jpg, .jpeg, .png"><br><br><br>
        Medical Condition: <input type="text" name="medical_condition" required value=""><br><br><br>


         <button type="submit" name="submit">Submit</button><br><br>

     </form>
<br>
<a href="data.php">Data</a>
</body>
</html>

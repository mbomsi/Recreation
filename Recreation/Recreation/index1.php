<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>None</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
 <div class="cont">
    <h2> Pharmacist</h2>
    <a class="btn btn-primary" href="create1.php" role="button">New Worker</a><br><br>
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Names</th>
            <th> email</th>
            <th>  Phone</th>
            <th> shift</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $servername="localhost";
        $username="root";
        $password ="";
        $dbname = "pharmacy";

        $connection =  new mysqli($servername,$username,$password,$dbname);

        if($connection->connect_error){
            die("connection failed:".$connection->connect_error);
        }

        $sql = "SELECT * FROM pharmacist";
        $result = $connection->query($sql);

        if(!$result){
            die("Invalid query:" .$connection->errror);
        }

        while ($row = $result->fetch_assoc()) {

            echo "
                <tr>
               <td>$row[id]</td>
               <td>$row[Names]</td>
               <td>$row[email]</td>
               <td>$row[Phone]</td>
               <td>$row[shift]</td>
               <td>
                   
<a class='btn btn-primary btn-sm' href='edit2.php?id=$row[id]'>Edit</a>
<a class='btn btn-danger btn-sm' href='delete1.php?id=$row[id]'>Delete</a>
               </td>
           </tr>
                ";
        }
        ?>

        </tbody>
    </table>
</div>
</body>
</html>


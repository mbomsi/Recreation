<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>None</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="cont">
    <h2> List of Drugs</h2>
      <a class="btn btn-primary" href="create.php" role="button">New Drug</a><br><br>
       <table class="table">
           <thead>
           <tr>
               <th>id</th>
               <th> DrugName</th>
               <th> Quantity in Stock</th>
               <th> Expiry Date</th>
               <th> Dose(g)</th>
               <th> Drug_Form</th>
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

           $sql = "SELECT * FROM antibiotics";
           $result = $connection->query($sql);

            if(!$result){
                die("Invalid query:" .$connection->errror);
            }

            while ($row = $result->fetch_assoc()) {

                echo "
                <tr>
               <td>$row[id]</td>
               <td>$row[DrugName]</td>
               <td>$row[Quantity_In_Stock]</td>
               <td>$row[Expiry_Date]</td>
               <td>$row[Dose]</td>
               <td>$row[Drug_Form]</td>
               <td>
                   
<a class='btn btn-primary btn-sm' href='edit.php?id=$row[id]'>Edit</a>
<a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Delete</a>
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

<?php


$con=mysqli_connect("localhost","root","","pharmacy");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table border= 3 cellpadding=0 cellpadding=10 >
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Image</td>
        <td>Medical Condition</td>
    </tr>
    <?php
    $i =1;
    $rows = mysqli_query($con,"SELECT * FROM images ORDER BY id DESC");
    ?>
    <?php foreach ($rows as $row) : ?>
    <tr>
       <td><?php  echo $i++ ?></td>
        <td><?php  echo $row["name"]; ?></td>
        <td><img src="http://localhost/Recreation/image/<?php echo $row['image']; ?>"  width=300  height=100 title="<?php  echo $row['image']; ?>" ></td>
    </tr>
    <?php endforeach;?>

</table><br>
<a href="records.php">Add  a record</a>
</body>
</html>

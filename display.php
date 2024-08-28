<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <a href="index.php">Add Student</a>
   <table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
    <?php

       include ('dbcon.php');

       $q = "select * from student";
       $query = mysqli_query($con, $q);

       while ($result = mysqli_fetch_array($query)) {
       	
     ?>

    <tr>
        <td><?php echo $result['id']?></td>
        <td><?php echo $result['name']?></td>
        <td><?php echo $result['email']?></td>
        <td><?php echo $result['password']?></td>
        <td>
            <a href="edit.php?id=<?php echo $result['id'];?>">Edit</a>
            <a href="delete.php?id=<?php echo $result['id'];?>">Delete</a>
        </td>
    </tr>

    <?php
         }
    ?>
   </table>
    
</body>
</html>
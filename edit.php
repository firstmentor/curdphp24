<?php


include ('dbcon.php');


$id = $_GET['id'];

$sql ="SELECT * FROM student WHERE id= '$id'";
$run = mysqli_query($con, $sql);

$data = mysqli_fetch_assoc($run); //fetch array data

//echo $data['name'];
?>

<h1>Update student data</h1>

    <form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>"/>
         Name:
        <input type="text" name="name" value="<?php echo $data['name']?>">
        <br><br>
 
        email:
        <input type="email" name="email" value="<?php echo $data['email']?>">
        <br><br>

        password:
        <input type="password" name="password" value="<?php echo $data['password']?>">
        <br><br>


        <button type="submit" name="submit">Update</button>


    </form>


    


    
</body>
</html>
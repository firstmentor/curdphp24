<?php
include ('dbcon.php');

if (isset($_POST['submit']))
{
$id =$_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$q ="update student set id=$id, name= '$name', email='$email',password='$password' where id = $id ";
$query =mysqli_query($con, $q);
header ('location: display.php');
}
?>
<?php 
include('dbcon.php');

if(isset($_POST['submit'])){

 echo$name = $_POST['name'];
 $email = $_POST['email'];
 $password =$_POST['password'];

 //$q ="INSERT INTO `student`(`name`, `email`,`password`) VALUES ('$name', '$email','$password')";

 $q ="INSERT INTO student(name,email,password) VALUES ('$name', '$email','$password')";

 $query =mysqli_query($con, $q) or die("query unsuccessfull"); //run query
 header("Location:http://localhost/curd/display.php");




}
?>
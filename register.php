<?php
include_once 'connect_database.php';

$fName = $_POST['firstName'];
$lName = $_POST['lastName'];
$email = $_POST['email'];
$pWord = $_POST['passWord'];

$sql="INSERT INTO users (firstName,lastName,email,passWord) 
VALUES('$fName','$lName','$email','$pWord'); ";
 $register=mysqli_query($connect,$sql); //add variable in  connected database and selected table

header("Location:add_data_database.php?singup=Success") //nawatha form ekata enna ha data database ekata giyada danaganna



?>
<?php
$servername="localhost";
$name="root";
$password="";
$dbname="Ak onfurniture";
mysqli_connect
$a=$_GET['Email'];
$b=$_GET['password'];
$conn=mysqli_connect($servername,$name,$password,$dbname);
$task="insert into Myitem(Email,password)VALUES('$a','$b')";

$result=mysqli_query($conn,$task);
        mysqli_close($conn);
?>

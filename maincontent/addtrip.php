<?php
require_once "connection.php";
$num=$_POST['num'];
$place=$_POST['place'];
$date=$_POST['date'];
$tickets=$_POST['tickets'];
$resto=$_POST['restaurant'];
$cost=$_POST['cost'];
$id=$_POST['driverid'];
$query="INSERT INTO upcomingtrips VALUES($num,'$place','$date','$tickets','$resto','$cost',$id)";
$result=mysqli_query($con,$query);
session_start();
$_SESSION['done']="yes";
header("Location:admin.php");
?>
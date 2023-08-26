<?php
require_once "connection.php";
$num=$_POST['numact'];
$activity=$_POST['activity'];
$images=$_POST['img'];
$query="INSERT INTO activities VALUES($num,'$activity')";
$result=mysqli_query($con,$query);
$query2="SELECT * FROM upcomingtrips where num=$num";
$result2=mysqli_query($con,$query2);
$row=mysqli_fetch_array($result2);
$place=$row['place'];
$query1="INSERT INTO images VALUES('$place','$images')";
$result1=mysqli_query($con,$query1);
header("Location:admin.php");
?>
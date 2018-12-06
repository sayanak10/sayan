<?php
$sl=$_GET['sl'];
$con=mysqli_connect("localhost","root","","milkmanagement");
$sql="delete from purchase where sl=$sl";
mysqli_query($con,$sql);
header("location:insert.php");
?>
<?php

$con = mysqli_connect("localhost","root","","milkmanagement");
mysqli_connect_error();

$id=['id'];
$query= mysqli_query ("SELECT * from purchase");
while ($row = mysql_fetch_array ($query)) 
  {
	if($id==id)
	{
		$date=$_POST['Date'];
		$staffid=$_POST['staffid'];
		$sellername=$_POST['sellername'];
		$contact=$_POST['contact'];
		$address=$_POST['address'];
		$milktype= $_POST['milktype'];
		$qty=$_POST['qty'];
		$rate=$_POST['rate'];
	}
  }
  
?>
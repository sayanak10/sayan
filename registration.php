<?php
$con=mysqli_connect("localhost","root","","milkmanagement");
mysqli_connect_error();
error_reporting(0);
if($_POST['password'])
{

	$Firstname=$_POST['Firstname'];
	$Lastname=$_POST['Lastname'];
	$Gender=$_POST['Gender'];
	$Email=$_POST['Email'];
	$Phone_no=$_POST['ph'];
	$Dob=$_POST['bday'];
	$Address=$_POST['Address'];
	$pswd=$_POST['password'];
	
	

	$sql="INSERT INTO `registration`(`Firstname`,`Lastname`,`Gender`,`Email`,`Phone_no`,`Dob`,`Address`,`pswd`) VALUES ('$Firstname','$Lastname','$Gender','$Email',$Phone_no,'$Dob','$Address','$pswd')";

	$result=mysqli_query($con,$sql);
	if($result)
	{
			echo "<script>alert('Registration Complete');</script>" ;
			header('location:index.php');
	}

}
?>

<html>
<head>
<style>
body {
background:light blue;
}
.contaner{
width:500px;
margin:auto;
background:paleturquoise;
margin-top:40px;
padding:10px;
}
form{
padding:20px;
font-family:italic;

}
#r1{
position:relative;
top:-30px;
left:158px;
}
input{
padding:10px;
margin:5px;
}

button{
background-color:grad;
border-radius:5px;
margin:10px;
padding:5px;
}
#section1 {
	margin-left:600px;
	position:relative;
	top:185px;
	bottom:900px;
	left:15px
}

</style>

<body>
<div id="section1">
  <img src="air.png" width="12%" height="15%">
  </div>
<div class="contaner">

<form action="registration.php" method="post">
<div id="r1">
<h2> Registration </h2>
  </div>
  <table>
  <tr>
  <td>Firstname:</td>
  <td> <input type="text" placeholder="Firstname" name="Firstname"required ></td>
  </tr>
  
  <tr>
  <td>Lastname:</td>
  <td><input type="text" placeholder="Lastname" name="Lastname" required></td>
  </tr>
  
  <tr>
  <td>Gender:</td>
  <td>
  <input type="radio" name="Gender" value="M" required >Male
  <input type="radio" name="Gender" value="F" required >Female
  </td>
  </tr>
   <tr>
  <td>Email:</td>
  <td><input type="text" placeholder="Email" name="Email" required></td>
  </tr>
 <tr>
  <td>Phone No:</td>
  <td><input type="number" name="ph" placeholder="+91" required></td>
  </tr>
  <tr>
  <td>Date of Birth:</td><br>
  <td><input type="date" name="bday" required></td>
  </tr>
   <tr>
  <td>Address:</td>
  <td><input type="text" name="Address" required></td>
  </tr>
  
  <td>Password:</td>
  <td><input type="password" name="password" required></td>
  <tr><br>
  
  <td><button type="submit" value="submit">submit</button></td><br>
  </tr>
  </table>
  </div>

</body>
</head>
</html>
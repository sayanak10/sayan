<?php
error_reporting(0);
$con = mysqli_connect("localhost","root","","milkmanagement");
mysqli_connect_error();

$staffid=$_GET['staffid'];

$sql="select * from staff where staffid=$staffid";
$query=mysqli_query($con,$sql);
    if(mysqli_num_rows($query)>0)
    {
		$row=mysqli_fetch_object($query);
		$date=$row->date; 
        $Gender=$row->Gender;
         $staffid=$row->staffid; 
         $Name=$row->Name; 
		 $Address=$row->Address; 
         $Contact=$row->Contact;
    } 
if(isset($_POST['save'])==1)
{
	
$date=$_POST['Date'];
$Name=$_POST['name'];
$Gender=$_POST['gender'];
$staffid=$_POST['staffid'];
$Contact= $_POST['contact'];
$Address=$_POST['address'];
	
$sql =  "update staff set date='$date', Name='$Name', Contact='$Contact', Address='$Address', Gender='$Gender' where staffid=$staffid";
//$sql =  "INSERT INTO `purchase` (`date`,`staffid`,`sellername`,`contact`,`address`,`milktype`,`qty`,`rate`) VALUES ('$date',$staffid,'$sellername','$contact','$address','$milktype',$qty,$rate)";

mysqli_query($con,$sql);
header("location:insert3.php");
}
?>
<html>
<head>
<title>
Dairy Management
</title>
<style type="text/css">

.head-sec{
color:white;
background-color:#2BC0E4;
padding:20px;
height:70px;
}

.oval {

  height: 50px;
  width: 100px;
  background-color: #ff9900;
  border-radius: 50%;
  margin:5px;
  border:1px black double;
  padding:10px 10px 10px 10px;
font-weight:bold;
font-style:italic;
}
.align
{
text-align:center;
}
.vl {
    border-left: 6px solid black;
    height: 550px;
    position: absolute;
    left: 12%;
    margin-left: 12px;
    top: 77;
}
#align2{
color:white;
background-color:#FFE47A;
height:200px;
width:1160px;
float:right;
}
td {
    
    text-align: left;
    padding: 8px;
}



</style>
</head>
<body>
<div class="head-sec">
<h1 class="align">Dairy Management System</h1>
</div>
<div id="align2">
<form action="update3.php" method="post">
<h2> Add staff Member </h2>
<table>
<tr>
<td>Date: <input type="date" name="Date" value=<?php echo $date;?> readonly></td>
<td>Gender:
<select name="gender">
<option <?php if($gender=="Male") echo "selected";?>>Male</option>
<option<?php if($gender=="Female") echo "selected";?>>Female</option>
<option <?php if($gender=="others") echo "selected";?>>others</option>
</select></td>
<td>Staff.id:<input type="number" name="staffid" value=<?php echo $staffid;?> readonly></td>
</tr>
<tr>
<td>Name: <input type="text" name="name" value=<?php echo $Name; ?>></td>
<td>Address:<input type="text" name="address" value=<?php echo $Address;?>></td>
<td>contact : <input type="text" name="contact"value=<?php echo $Contact;?>></td>
<td><button name="save">Add</button></td>
</tr>
</table>
</form>
</div>

<div id="align3">
<table  cellpading="5" cellspacing="0" border="1"  align="right">
    <tr>
        <th>Sl.no</th>
        <th>Date</th>
        <th>Gender</th>
        <th>Staff ID</th>
        <th>Name</th>
        <th>Address</th>
		<th>Contact</th>
        <th>Action</th>
    
    </tr>
    <?php
    $rsl="select * from staff";
    $query=mysqli_query($con,$rsl);
    if(mysqli_num_rows($query)>0)
    {$i=1;
        while($row=mysqli_fetch_object($query))
        {
        
        
    
    ?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row->date; ?></td>
        <td><?php echo $row->Gender; ?></td>
        <td><?php echo $row->staffid; ?></td>
        <td><?php echo $row->Name; ?></td>
		<td><?php echo $row->Address; ?></td>
        <td><?php echo $row->Contact; ?></td>
        <td>
            <a href="<?php echo "update3.php?staffid=".$row->staffid."";?>">Edit</a>
        </td>
    </tr>
        <?php
        }
    } 
    ?>
</table>
</div>






<div>
<div class="oval" ><p class="align"><a href="dproject.html">Purchase</p></div>
<div class="oval"><p class="align"><a href="linksales.html" style="text-decoration:none">Sales</a></p></div>
<div class="oval"><p class="align"><a href="linkstaff.php" style="text-decoration:none">Staff</a></p></div>
<div class="oval"><p class="align"><a href="stock.php" style="text-decoration:none">Stock</a></p></div>
<div class="oval"><p class="align"><a href="Trans.php" style="text-decoration:none">Transaction</a></p></div>
<div class="oval"><p class="align"><a href="linktrans.html" style="text-decoration:none">Stored procedure</a></p></div>
<div class="oval"><p class="align"><a href="trig.php" style="text-decoration:none">Trigger</a></p></div>
</div>





</body>
</html>
<?php
error_reporting(0);
$con = mysqli_connect("localhost","root","","milkmanagement");
mysqli_connect_error();

$sl=$_GET['sl'];

$sql="select * from purchase where sl=$sl";
$query=mysqli_query($con,$sql);
    if(mysqli_num_rows($query)>0)
    {
		$row=mysqli_fetch_object($query);
		$sl=$row->sl;
		$staffid=$row->staffid;
		$date=$row->date;
		$sellername=$row->sellername;
		$contact=$row->contact;
		$address=$row->address;
		$milktype= $row->milktype;
		$qty=$row->qty;
		$rate=$row->rate;
    } 
if(isset($_POST['save'])==1)
{
$sl=$_POST['sl'];
$staffid=$_POST['staffid'];
$date=$_POST['Date'];
$sellername=$_POST['sellername'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$milktype= $_POST['milktype'];
$qty=$_POST['qty'];
$rate=$_POST['rate'];
	
$sql =  "update purchase set date='$date', sellername='$sellername', contact='$contact', address='$address' where sl=$sl";
//$sql =  "INSERT INTO `purchase` (`date`,`staffid`,`sellername`,`contact`,`address`,`milktype`,`qty`,`rate`) VALUES ('$date',$staffid,'$sellername','$contact','$address','$milktype',$qty,$rate)";

mysqli_query($con,$sql);
header("location:insert.php");
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
<form action="update.php" method="post">
<h2> Purchase </h2>
<table>
<tr>
<td>Sl.no: <input type="number" name="sl" value=<?php echo $sl;?> readonly></td>
<td>Date: <input type="date" name="Date" value=<?php echo $date;?>></td>
<td>S.id:<input type="number" name="staffid" value=<?php echo $staffid;?> readonly></td>

<td>Address: <input type="text" name="address" value=<?php echo $address;?>></td>
<td>qty:<input type="number" name="qty" value=<?php echo $qty;?> readonly></td>

<td>contact: <input type="text" name="contact" value=<?php echo $contact;?>></td>
</tr>
<tr>
<td>SellerName:  <input type="text" name="sellername" value=<?php echo $sellername;?>></td>
<td>Milk type: 
<select name="milktype"  disabled>
<option <?php if($milktype=="cow") echo "selected";?>>cow</option>
<option <?php if($milktype=="Buffalo") echo "selected";?>>Buffalo</option>
<option <?php if($milktype=="Goat") echo "selected";?>>Goat</option>
</select></td>
<td>rate : <input type="number" name="rate" value=<?php echo $rate;?> readonly></td>
<td><button name="save">Submit</button></td>
</tr>
</table>
</form> 
</div>
<div id="align3">
<table  cellpading="5" cellspacing="0" border="1"  align="right">
    <tr>
        <th>Sl.no</th>
        <th>Date</th>
        <th>StaffId</th>
        <th>Address</th>
        <th>Qty</th>
        <th>Contact</th>
        <th>SellerName</th>
        <th>Milkof</th>
        <th>Rate</th>
        <th>Action</th>
    
    </tr>
    <?php
    $rsl="select * from purchase";
    $query=mysqli_query($con,$rsl);
    if(mysqli_num_rows($query)>0)
    {
        while($row=mysqli_fetch_object($query))
        {
        
        
    
    ?>
    <tr>
        <td><?php echo $row->sl; ?></td>
        <td><?php echo $row->date; ?></td>
        <td><?php echo $row->staffid; ?></td>
        <td><?php echo $row->address; ?></td>
        <td><?php echo $row->qty; ?></td>
        <td><?php echo $row->contact; ?></td>
        <td><?php echo $row->sellername; ?></td>
        <td><?php echo $row->milktype; ?></td>
        <td><?php echo $row->rate; ?></td>
        <td>
            
            <a href="<?php echo "update.php?sl=".$row->sl."";?>">Edit</a>
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
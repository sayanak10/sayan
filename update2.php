<?php
error_reporting(0);
$con = mysqli_connect("localhost","root","","milkmanagement");
mysqli_connect_error();

$sl=$_GET['sl'];

$sql="select * from sales where sl=$sl";
$query=mysqli_query($con,$sql);
    if(mysqli_num_rows($query)>0)
    {
		$row=mysqli_fetch_object($query);
		$sl=$row->sl;
		$staffid=$row->staffid;
		$date=$row->date;
		$dealername=$row->customername;
		$contact=$row->contact;
		$Milktype= $row->Milktype;
		$qty=$row->qty;
		$rate=$row->rate;
    } 
if(isset($_POST['save'])==1)
{
$sl=$_POST['sl'];	
$date=$_POST['Date'];
$staffid=$_POST['staff'];
$dealername=$_POST['Dealer'];
$conatct=$_POST['contact'];
$Milktype= $_POST['milktype'];
$qty=$_POST['qty'];
$rate=$_POST['rate'];
	
$sql =  "update sales set date='$date', customername='$dealername',contact='$conatct', qty=$qty, rate=$rate where staffid=$staffid";
//$sql =  "INSERT INTO `purchase` (`date`,`staffid`,`sellername`,`contact`,`address`,`milktype`,`qty`,`rate`) VALUES ('$date',$staffid,'$sellername','$contact','$address','$milktype',$qty,$rate)";

mysqli_query($con,$sql);
header("location:insert2.php");
}
?>
<html>
<head>
<title>
Dairy Management
</title>
<style type="text/css">

.head-sec{
color:black;
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
color:black;
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
<form action="update2.php" method="post">
<h2> Sell Milk </h2>
<table>
<tr>
<td>Sl.no: <input type="number" name="sl" value=<?php echo $sl;?> readonly></td>
<td>Date: <input type="date" name="Date" value=<?php echo $date;?>></td>
<td>Staff.id:<input type="number" name="staff" value=<?php echo $staffid;?> readonly ></td>

<td>Customer Name: <input type="text" name="Dealer" value=<?php echo $dealername;?>></td>
<td>Contact Number: <input type="text" name="contact" value=<?php echo $contact;?>></td>
</tr>
<tr>
<td>Milk of: 
<select name="milktype" disabled>
<option <?php if($milktype=="cow") echo "selected";?>>cow</option>
<option <?php if($milktype=="Buffalo") echo "selected";?>>Buffalo</option>
<option <?php if($milktype=="Goat") echo "selected";?>>Goat</option>
</select></td>
<td>qty:<input type="number" name="qty" value=<?php echo $qty;?> readonly></td>
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
        <th>Customer Name</th>
        <th>Milkof</th>
        <th>Quantity</th>
		<th>Rate</th>
        <th>Action</th>
    
    </tr>
    <?php
    $rsl="select * from sales";
    $query=mysqli_query($con,$rsl);
    if(mysqli_num_rows($query)>0)
    {$i=1;
        while($row=mysqli_fetch_object($query))
        {
        
        
    
    ?>
    <tr>
        <td><?php echo $row->sl; ?></td>
        <td><?php echo $row->date; ?></td>
        <td><?php echo $row->staffid; ?></td>
        <td><?php echo $row->customername; ?></td>
		<td><?php echo $row->contact; ?></td>
        <td><?php echo $row->Milktype; ?></td>
		<td><?php echo $row->qty; ?></td>
        <td><?php echo $row->rate; ?></td>
        <td>
            <a href="<?php echo "delete2.php?sl=".$row->sl."";?>">Delete</a>
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
<?php
$con = mysqli_connect("localhost","root","","milkmanagement");
mysqli_connect_error();



if(isset($_POST['save'])==1)
{
$sl=$_POST['sl'];
$date=$_POST['Date'];
$staffid=$_POST['staffid'];
$sellername=$_POST['sellername'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$milktype= $_POST['milktype'];
$qty=$_POST['qty'];
$rate=$_POST['rate'];
$total=$qty*$rate;

$qc_stock =  "INSERT INTO `stock` (`mtype`,`qty`) VALUES ('cow',0)";
$qb_stock =  "INSERT INTO `stock` (`mtype`,`qty`) VALUES ('Buffalo',0)";
$qg_stock =  "INSERT INTO `stock` (`mtype`,`qty`) VALUES ('Goat',0)";
//$q2_stock = "update stock set qty=$qty where mtype='$milktype'";
//mysqli_query($con,$ql);
mysqli_query($con,$qc_stock);
mysqli_query($con,$qb_stock);
mysqli_query($con,$qg_stock);
//mysqli_query($con,$q2_stock);

// ____________________________________________________________________________________________________________________
$ssql="select * from `stock` where mtype='$milktype'";
$squery=mysqli_query($con,$ssql);
if(mysqli_num_rows($squery)>0)
{
	$row=mysqli_fetch_object($squery);
	$newqty=($row->qty)+($qty);
	$mtype = $row->mtype;
	//$sstaffid=$row->staffid;
	//echo $newqty;
	mysqli_query($con,"update stock set qty=$newqty where mtype='$mtype'");
}



//______________________________________________________________________________________________________________________

$sql =  "INSERT INTO `purchase` ( `sl`,`date`,`staffid`,`sellername`,`contact`,`address`,`milktype`,`qty`,`rate`,`total`) VALUES ($sl,'$date',$staffid,'$sellername','$contact','$address','$milktype',$qty,$rate,$total)";
$ql =  "INSERT INTO `transaction` (`date`,`rate`,`total`) VALUES ('$date',$rate,$total)";
mysqli_query($con,$sql);
mysqli_query($con,$ql);

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
<form action="insert.php" method="post">
<h2> Purchase </h2>
<table>
<tr>
<td>Sl.no: <input type="number" name="sl"></td>
<td>Date: <input type="date" name="Date"></td>
<td>S.id:<input type="number" name="staffid"></td>

<td>Address: <input type="text" name="address"></td>
<td>qty:<input type="number" name="qty"></td>

<td>contact: <input type="text" name="contact"></td>
</tr>
<tr>
<td>SellerName:  <input type="text" name="sellername"></td>
<td>Milk type: 
<select name="milktype">
<option>cow</option>
<option>Buffalo</option>
<option>Goat</option>
</select></td>
<td>rate : <input type="number" name="rate"></td>
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
		<th>Total</th>
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
        <td><?php echo  $row->total;?></td>
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
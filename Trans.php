<?php
$con = mysqli_connect("localhost","root","","milkmanagement");
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

td {
    
    text-align: left;
    padding: 8px;
}

table{
margin-right: 300px;
}	

</style>
</head>
<body>
<div class="head-sec">
<h1 class="align">Transactions</h1>
</div>
<div id="align2">

</div>
<div id="align3">
<table  cellpading="5" cellspacing="0" border="1"  align="right">
    <tr>
        <th>Sl.no</th>       
        <th>Date</th>
        <th>Rates</th>
        <th>Total</th>
    </tr>
    <?php
    $rsl="select * from transaction";
    $query=mysqli_query($con,$rsl);
    if(mysqli_num_rows($query)>0)
    {$i=1;
        while($row=mysqli_fetch_object($query))
        {
	
        
        
    
    ?>
    <tr>
        <td><?php echo $i++; ?></td>        
        <td><?php echo $row->date; ?></td>            
        <td><?php echo $row->rate; ?></td>
        <td><?php echo $row->total; ?></td>
		
	<?php

		}
	}
    
	
    ?></td>
        </tr>
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
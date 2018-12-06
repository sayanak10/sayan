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
<form action="insert2.php" method="post">
<h2> Sell Milk </h2>
<table>
<tr>
<td>Sl.no: <input type="number" name="sl"></td>
<td>Date: <input type="date" name="Date"></td>
<td>Staff.id:<input type="number" name="staff"></td>

<td>Customer Name: <input type="text" name="Dealer"></td>
<td>Contact Number: <input type="text" name="contact"></td>

</tr>
<tr>
<td>Milk of: 
<select name="milktype">
<option>cow</option>
<option>Buffalo</option>
<option>Goat</option>
</select></td>
<td>qty:<input type="number" name="qty"></td>
<td>rate : <input type="number" name="rate"></td>
<td><button name="save">Submit</button></td>
</tr>
</table>
</form>
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

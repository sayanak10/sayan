
<?php

	
$con =  mysqli_connect("localhost","root","","milkmanagement");
if(!$con){
	die('failed to connect');
}

if(isset($_POST['save'])==1){
	$late=$_POST['cust'];





// CREATE DEFINER=`root`@`localhost` PROCEDURE `get_Sales`(IN `date` DATE, OUT `amt` INT(11)) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER BEGIN SELECT *FROM sales; END


$pro = "CREATE PROCEDURE `get_Sales`(IN `dd` VARCHAR(33))
         BEGIN
		 SELECT *FROM sales WHERE customername=`dd`;
		
		 END;
		 ";

		 if(mysqli_query($con,$pro))
		 {
			echo "<script>alert('DONE');</script>" ;
		 }
		$call="CALL `get_Sales`('$late')";
		
		//if(mysqli_query($con,$call))
		 //{
		//	echo "executed1";
		 ///}
		 $result = mysqli_query($con,$call);
		 
}

		 if(mysqli_num_rows($result)>0){
     
        
		 while( $row = mysqli_fetch_assoc($result))
		 {
        ?>
		      
			 <table  cellpading="5" cellspacing="0" border="1"  align="center">
			 <th>CUSTOMER NAME</th>
			 <th>DATE</th>
        <th>AMOUNT</th>
		<th>Contact Number</th>
		<tr>
		<td><?php echo $row['customername']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['total']; ?></td>
		<td><?php echo $row['contact']; ?></td>
		
			 </tr>

		 <?php 
}
		 }
	?>

<h2>CUSTOMER TRANSACTION INFORMATION</h2> 
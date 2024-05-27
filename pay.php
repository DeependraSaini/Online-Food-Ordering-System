<?php

	session_start();	

     $conn=mysqli_connect("localhost","root","","database");

	if(isset($_POST['pay'])){

		$Card_holder=$_POST['Card_holder'];
		$Card_number=$_POST['Card_number'];
		$Expiry=$_POST['Expiry'];
		$CVV=$_POST['CVV'];

		$query="insert into payment(Card_holder,Card_number,Expiry,CVV)values('$Card_holder','$Card_number','$Expiry','$CVV')";
		$run=mysqli_query($conn,$query);
		
		if($run){
			echo "<script>alert('Payment Sucessfully');window.location.href='cash.php';</script>";
		}
		else{
			echo"error:".mysqli_error($conn);
		}
	}
?>

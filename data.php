<?php

	session_start();	

     $conn=mysqli_connect("localhost","root","","database");

	if(isset($_POST['submit'])){

		$name=$_POST['name'];
		$image=$_POST['image'];
		$price=$_POST['price'];

		$query="insert into tproduct(name,image,price)values('$name','$image','$price')";
		$run=mysqli_query($conn,$query);
		

		if($run){
			echo "<script>alert('data insert sucessfully');window.location.href='index.php';</script>";
		}
		else{
			echo"error:".mysqli_error($conn);
		}
	}
?>
<?php
	session_start();
	
$conn=mysqli_connect("localhost","root","","database");

	if(isset($_POST['submit'])) {

		$username=$_POST['username'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$number=$_POST['number'];
		
		$query="insert into `user`(`username`,`name`,`email`,`password`,`number`)values('$username','$name','$email','$password','$number')";
		$run=mysqli_query($conn,$query);
		

		if($run){
			echo "<script>alert('data insert sucessfully');window.location.href='login.php';</script>";
		}
		else{
			echo"error:".mysqli_error($conn);
		}
	}

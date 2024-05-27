<?php
	session_start();
	
$conn=mysqli_connect("localhost","root","","database");

	if(isset($_POST['addstaff'])) {

		$E_id=$_POST['id'];
		$Name=$_POST['name'];
		$Mobile=$_POST['number'];
		$DOB=$_POST['date'];
		$Dept=$_POST['dept'];
		$Gender=$_POST['gender'];
		$State=$_POST['state'];
		$City=$_POST['city'];

		$query="INSERT INTO `staff`(`E_id`, `Name`, ` Mobile`, `DOB`, `Dept`, `Gender`, `State`, `City`) VALUES('$E_id', '$Name', '$Mobile', '$DOB', '$Dept', '$Gender', '$State', '$City')";
		$run=mysqli_query($conn,$query);
		
		if($run){
			echo "<script>alert('Staff Added Sucessfully');window.location.href='staff.php';</script>";
		}
		else{
			echo"error:".mysqli_error($conn);
		}
	}
?>

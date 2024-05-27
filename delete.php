<?php
include("connection.php");
error_reporting(0);
$f_id=$_GET['fd'];
$query="DELETE FROM `order detail` WHERE F_ID='$f_id'";

$data=mysqli_query($conn,$query);

if($data)
{
	echo "<script>alert('data insert sucessfully');window.location.href='order.php';</script>";
}
else
{
		echo "<script>alert('Failed to insert data ');window.location.href='order.php';</script>";
}
?>
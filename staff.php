<?php
session_start();
if(!isset($_SESSION['uname'])){
	header("location:admin.php");
}

?>
<?php
include_once('connection.php');
$query="SELECT * FROM `staff`";
$result=mysqli_query($conn,$query);
?>

<html>
<head>
<title></title>
<link rel="stylesheet" href="file:///F:/fontawesome-free-5.12.1-web/css/all.css">
<script src="https://kit.fontawesome.com/5da368dd82.js"></script>
<link rel="stylesheet" type="text/css" href="fontawesome.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<style>
	body{
		background-image:url("photo/back.jpg");
		background-size:100%;
		font-family:sans-serif;
	}
	
	.list {
		width:250px;
		height:700px;
		padding:0px;
		background:#000;
		color:#fff;
		margin-top:60px;
		border-radius:10px;
	}
	.avatar{
		width:150px;
		height:100px;
		border-radius:50%;
		position:absolute;
		background:#fff;
		margin-left:50px;
		margin-top:-40px;
		left:calc(50% -50px);
	}
	 h1{
		top:10px;
		padding:60px;	
		text-align:center;		
		font-size:20px;	
		background:#ff6347;	
	}
	
	.list ul{
		padding:0px;	
		margin:0;
		float:left;
		margin-left:30px;
	}	
	.list ul li{
		position:relative;
		list-style:none;
		display:inline-block;
	
	}
	.list ul li a{
		display:block;
		padding:0px;
		color:white;
		text-decoration:none;
		line-height:60px;
		font-size:20px;
	}
	
	
	.add h2{
		width:100%;
		height:70px;
		padding:0px;
		font-family:verdana;
		text-shadow:10px 10px 10px#333;
		text-align:center;
		font-size:60px;
		color:#00ff00;
		margin-top:-700px;

	}
	.text table{
		margin-left:260px;
	}
	.text tr th{
		background:grey;
		font-size:20px;
		width:97px;
		height:50px;
		padding-left:20px;
		text-align:center;
		
	}	
	.text  td{
		font-size:20px;
		background:red;
		color:#fff;
		height:70px;
		font-style:italic;
		text-align:center;
	}
	
		

	 input[type="text"]
		{
		width:80%;
		padding:5px;	
		font-size:18px;	
		margin-left:100px;
	}	
	input[type="submit"]
		{
		margin-left:700px;
		border:none;
		outline:none;
		height:40px;
		background:#ffc107;
		color:#fff;
		font-size:20px;
		border-radius:20px;
	}
	.text input[type="submit"]:hover
	{
		cursor:pointer;
		background:#fb2525;
		color:#000;
	}

	
</style>	
<body>
<div class="list">
<img src="photo/admini.png" class="avatar">
<h1> welcome Admin <?php echo $_SESSION['uname'];?></h1>
		
<ul>
	<li><a href="index.php"><i class="fa fa-tachometer" aria-hidden="true">  DASHBOARD</i></a></li></br></br></br>

	<li><a href="addfood.php"><i class="fa fa-cutlery" aria-hidden="true"> ADD FOOD</i></a></li></br></br></br>

	<li><a href="order.php"><i class="fab fa-first-order-alt"> VIEW ORDER</i></a></li></br></br></br>

	<li><a href="staff.php"><i class="fa fa-users" aria-hidden="true"> VIEW STAFF</i></a></li>
</ul>
</ul>
</div>

<div class="add">
<h2><u>STAFF</u></h2>
</div>

<div class="text">
<table border="3" bordercolor="black">
	<tr>
		<th>E_ID</th>
		<th>NAME</th>
		<th>MOBILE </th>
		<th>DOB</th>
		<th>DEPT</th>
		<th>GENDER</th>
		<th>STATE</th>
		<th>CITY</th>
	</tr>
<?php
	        while($rows=mysqli_fetch_assoc($result))
	        {
?>
	<tr>
		 <td><?php echo $rows["E_id"]; ?></td>
		 <td><?php echo $rows["Name"]; ?></td>
		 <td><?php echo $rows[" Mobile"]; ?></td>
		 <td><?php echo $rows["DOB"]; ?></td>
		 <td><?php echo $rows["Dept"]; ?></td>
		 <td><?php echo $rows["Gender"]; ?></td>
		 <td><?php echo $rows["State"]; ?></td>
		 <td><?php echo $rows["City"]; ?></td>
	</tr>
<?php
	  }
?>


</table>
</div>
</br></br>
<input type="submit" name="addstaff" value="ADD STAFF" onclick="location.href='addstaff.php'">

</body>
</html>

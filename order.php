<?php
session_start();
if(!isset($_SESSION['uname'])){
	header("location:admin.php");
}else{

?>
<?php
include_once('connection.php');
$query="select * from `order detail`";
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
		height:50%;
		text-align:center;
		padding:0;
		color:yellow;
		font-style:arial;
		text-shadow:10px 10px 10px#333;
		font-size:90px;
		margin-top:-700px;
		font-weight:bold;
		margin-left:30px;
	}
	.table tr th{
		width:100px;
		height:100px;
		text-align:center;
		background:yellow;
		font-size:25px;
		position:relative;
		top:-200px;
		left:-10px;
	}
	.table tr td{
		text-align:center;
		font-size:20px;
		background:white;
		height:70px;
		position:relative;
		top:-200px;
		left:-10px;
		font-weight:bold;
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
<h2><u>Order History</u></h2>
</div>



<div class="table">
<table border="0" align="center">

	<tr>
		<th>FOOD_ID</th>
		<th>NAME</th>
		<th>QUANTITY</th>
		<th>PRICE</th>
		<th>USER</th>
		<th>ACTION</th>
		
	</tr>
	<?php
		while($rows=mysqli_fetch_assoc($result))
		{
	?>
	<tr>
		<td><?php echo $rows["F_ID"]; ?></td>
		<td><?php echo $rows["name"]; ?></td>
		<td><?php echo $rows["quantity"]; ?></td>
		<td><?php echo $rows["price"]; ?></td>
		<td><?php echo $rows["username"]; ?></td>
		<td><a href="delete.php?fd=<?php echo $rows["F_ID"]; ?>">DELETE</a></td>

	</tr>

	<?php
		}
	?>
</table>
<?php
	}
?>

</body>
</html>
<?php
session_start();
if(!isset($_SESSION['uname'])){
	header("location:admin.php");
}

?>
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"database");
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
	h2{
		width:100%;
		height:50%;
		text-align:center;
		padding:0;
		color:red;
		font-style:arial;
		text-shadow:10px 10px 10px#333;
		font-size:70px;
		margin-top:-700px;
		font-weight:bold;
		margin-left:100px;
	}
	.text {
		width:500px;
		height:440px;
		background:#000;
		margin-left:500px;
		font-size:20px;
		margin-top:-200px;
		text-align:center;
		border-radius:20px;
	}
	p{
		font-size:20px;
		color:#fff;
		padding:10px;
		font-weight:bold;
		letter-spacing:5px;
	}

	.text input[type="text"]
		{
		border:none;
		border-bottom:1px solid #fff;
		background:transparent;
		padding:10px;
		padding-top:10px;
		outline:none;
		height:40px;
		width:300px;
		color:#fff;
		font-size:20px;

	}

	.text input[type="submit"]
		{
		border:none;
		outline:none;
		height:40px;
		background:#233067;
		color:#fff;
		font-size:18px;
		border-radius:20px;
	}
	.text input[type="submit"]:hover
	{
		cursor:pointer;
		background:#ffc107;
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
<h2><u>Add SOUTH INDIAN Food</u></h2>
</div>
<div class="text">
<form action="data2.php" method="post">
<p>NAME:</p><input type="text" name="name" placeholder="Enter food name" required/></br>
<p>IMAGE:</p><input type="text" name="image" placeholder="Enter image path" required/></br>
<p>PRICE:</p><input type="text" name="price" placeholder="Enter food price" required/></br></br>
<input type="submit" name="submit" value="Addfood">
</form>
</div>

</body>
</html>

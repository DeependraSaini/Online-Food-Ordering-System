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
		font-size:90px;
		margin-top:-700px;
		font-weight:bold;
		margin-left:30px;
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
	.text h1{
		font-size:20px;
		background:#FF8C00;
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

	.text input[type="button"]
		{
		border:none;
		padding:10px;
		outline:none;
		height:40px;
		letter-spacing:5px;
		background:#87CEEB;
		color:#000;
		font-size:18px;
		border-radius:20px;
	}
	.text input[type="button"]:hover
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
<h2><u>Add Food</u></h2>
</div>
<div class="text">
<h1>CHOOSE THE CATEGORY IN WHICH YOU NEED TO ADD FOOD:-</h1>
<input type="button" name="fastfood" value="FAST FOOD" onclick="location.href='addfastfood.php'"/></br></br>
<input type="button" name="fastfood" value="SOUTH INDIAN FOOD" onclick="location.href='addsouthfood.php'"/></br></br>
<input type="button" name="fastfood" value="PUNJABI FOOD" onclick="location.href='addpunjabifood.php'"/></br></br>
<input type="button" name="fastfood" value="GUJARATI FOOD" onclick="location.href='addgujaratifood.php'"/>
</div>

</body>
</html>

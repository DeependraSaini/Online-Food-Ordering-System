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
		color:#000;
		font-style:arial;
		text-shadow:10px 10px 10px#333;
		font-size:90px;
		margin-top:-700px;
		font-weight:bold;
		margin-left:30px;
	}
	.text {
		width:600px;
		height:680px;
		background:orange;
		margin-left:400px;
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
<h2><u>Add STAFF</u></h2>
</div>
<div class="text">
<form action="staffadd.php" method="post">
<p>E_ID:<input type="text" name="id"  minlength="5" maxlength="5" placeholder="Enter employee id" required/></p>
<p>NAME:<input type="text" name="name"   placeholder="Enter employee name" required/></p>
<p>MOBILE:<input type="text" name="number" minlength="10" maxlength="10" placeholder="Enter mobile number" required/></p>
<p>DOB:<input type="date" name="date"  required/></p>
<p>DEPT:<input type="text" name="dept" placeholder="Enter department" required/></p>
<p>GENDER:<input type="radio" name="gender" value="MALE">MALE<input type="radio" name="gender" value="FEMALE">FEMALE</p>
<p>STATE:<input type="text" name="state" placeholder="Enter state" required/></p>
<p>CITY:<input type="text" name="city" placeholder="Enter city" required/></p>
<input type="submit" name="addstaff" value="Add staff">
</form>
</div>

</body>
</html>

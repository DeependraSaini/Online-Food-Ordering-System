<?php
session_start();
if(!isset($_SESSION['uname'])){
	header("location:admin.php");
}else{

?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="file:///F:/fontawesome-free-5.12.1-web/css/all.css">
<script src="https://kit.fontawesome.com/5da368dd82.js"></script>
<link rel="stylesheet" type="text/css" href="fontawesome.min.css">

</head>
<style>
	body{
		background-image:url("photo/back.jpg");
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
	.circle{
		width:250px;
		height:150px;
		background:#ffff00;
		margin-top:-700px;
		text-align:center;
		margin-left:300px;

	}
	.circle:after{
		content:'';
		padding-bottom:100%;
		display:block;
	}
	.circle p{
		position:absolute;
		top:50%;
		margin-top:-220px;
		margin-left:60px;
		font-size:20px;
		color:red;
		text-decoration:none;
	}
	
	.alt{
		width:250px;
		height:150px;
		background:#228b22;
		margin-top:-150px;
		color:#fff;
		text-align:center;
		margin-left:650px;

	}
	.alt:after{
		content:'';
		padding-bottom:100%;
		display:block;
	}
	.alt p{
		position:absolute;
		top:50%;
		margin-top:-220px;
		margin-left:60px;
		font-size:20px;
		color:#ffff00;
		text-decoration:none;
	}
	.falt{
		width:250px;
		height:150px;
		background:#ffa500;
		margin-top:-150px;
		color:#fff;
		text-align:center;
		margin-left:1000px;

	}
	.falt:after{
		content:'';
		padding-bottom:100%;
		display:block;
	}
	.falt p{
		position:absolute;
		top:50%;
		margin-top:-220px;
		margin-left:40px;
		font-size:20px;
		color:#000;
		text-decoration:none;
	}
	.img{
		margin-left:300px;
		margin-top:20px;
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
</div>
<div class="circle">
<p>TOTAL MENU</br>4</p>
	
</div>

<div class="alt">
<p> TOTAL DISHES</br>32</p>
</div>	
<div class="falt">
<p>NO OF TECHNICIAN</br>1</p>
</div>	
<div class="img">
	<img src="photo/graph.png" width="100%" height="500">
</div>	
</body>
</html>
<?php } ?>

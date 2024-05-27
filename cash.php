<?php
session_start();
require 'connection.php';

unset($_SESSION["cart1"]);
if(!isset($_SESSION['username'])){
	header("location:login.php");
}else{

?>

<html>

  <head>
    <title> COD </title>
  </head>

   <link rel="stylesheet" type = "text/css" href ="css/COD.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="file:///F:/fontawesome-free-5.12.1-web/css/all.css">
<script src="https://kit.fontawesome.com/5da368dd82.js"></script>
<link rel="stylesheet" type="text/css" href="fontawesome.min.css">


<style>
	body{
		margin:0;
		padding:0;
		font-family:sans-serif;
		background:#D3D3D3;
	}
	.dropdwn{
		margin:0 auto;
	}
	nav{
		width:100%;
		height:60px;
		background:#000;
	}
	.logo{
		padding:0px 0 80;
		width:200px;
		height:60px;
	}
	nav ul{
		padding:0;	
		margin:0;
		float:right;
		margin-right:30px;
	}
	nav ul li{
		position:relative;
		list-style:none;
		display:inline-block;
	}
	nav ul li a{
		display:block;
		padding:0 15px;
		color:white;
		text-decoration:none;
		line-height:60px;
		font-size:20px;
	}
	nav ul li a:hover{
		background:red;
	}
	nav ul ul{
		position:absolute;
		top:60px;	
		display:none;
	}
	nav ul li:hover > ul{
		display:block;
	}
	nav ul ul li{
		width:200px;
		float:none;
		display:list-item;
		position:relative;
	}
</style>
  <body>
  <body>
<div class="dropdwn">
<nav>
	<img class="logo" src="photo/logo.png">
<ul>
	<li><a href="#" style="text-decoration:none; color:#fff;">welcome <?php echo $_SESSION['username'];?></a></li>
	<li><a href="homepage.php" <i class="fas fa-home" style="text-decoration:none; color:#fff;">Home</i></a></li>
	<li><a href="about.php" <i class="fas fa-file-alt" style="text-decoration:none; color:#fff;">About</i></a></li>
	<li><a href="#" style="text-decoration:none; color:#fff;">Menu</a>
	<ul>
		<li><a href="fast.php" style="text-decoration:none; color:#fff;">Fast Food</a></li>
		<li><a href="south.php" style="text-decoration:none; color:#fff;">South Indian Food</a></li>
		<li><a href="punjab.php" style="text-decoration:none; color:#fff;">Punjabi Food</a></li>
		<li><a href="gujarat.php" style="text-decoration:none; color:#fff;">Gujarati Food</a></li>
	</ul>
	</li>
	<li><a href="cart1.php" <i class="fas fa-shopping-cart11" style="text-decoration:none; color:#fff;">Order cart</i></a></li>
	<li><a href="logout.php"  <i class="fas fa-sign-out-alt" style="text-decoration:none; color:#fff;">Logout</i></a></li>
</ul>
</nav>
</div>
        <div class="container">
          <div class="jumbotron">
            <h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> Order Placed Successfully.</h1>
          </div>
        </div>
        <br>

<h2 class="text-center"> Thank you for Ordering at My food Order'! The ordering process is now complete.</h2>

<?php 
  $num1 = rand(100000,999999); 
  $num2 = rand(100000,999999); 
  $num3 = rand(100000,999999);
  $number = $num1.$num2.$num3;
?>

<h3 class="text-center"> <strong>Your Order Number:</strong> <span style="color: blue;"><?php echo "$number"; ?></span> </h3>

        </body>

</html>
<?php
}
?>
<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
}else{

?>
<html>
<head>
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
	
	.text{
		width:100%;
		height:500px;
		padding:0x;
		background-image:url("photo/abouty.jpg");
		background-size:100%;
		background-repeat:no-repeat;
		margin-left:0px;
		font-size:80px;
		color:white;
	}	
	.who p{
		font-size:25px;
		font-family:sans-serif;
		margin-left:20px;
		word-spacing:10px;

	}	
	.who h1{

		font-size:40px;
		margin-left:20px;
		margin-top:100px;
		text-decoration:none;
	}
	.who p{
		font-style:italic;
		font-weight:bold;
		word-spacing:20px;
		color:blue;
	}


	.img{
		position:relative;
		text-align:right;
		margin-top:-200px;
		margin-right:50px;
	}
	.bul{
		font-size:20px;
	}
	.bul ul li{
		font-style:italic;
		font-size:30px;
		word-spacing:20px;
		color:red;
	}
	.pic{
		width:100%;
		height:50%;
		text-align:center;
		padding:0;
		margin-top:0px;
		margin-left:0px;
	}
	
	.call  h1{
		text-decoration:underline;
		font-size:40px;
	}
	.call ul li{
		font-style:italic;
		font-size:30px;
		word-spacing:20px;
		color:red;
	}
	.chef h1{
		font-size:40px;
		font-style:arial;
	}	
	.chef img{
		width:70%;
		
	} 
</style>
<body>
<div class="dropdwn">
<nav>
	<img class="logo" src="photo/logo.png">

<ul>
	<li><a href="#">welcome <?php echo $_SESSION['username'];?></a></li>
	<li><a href="homepage.php" <i class="fas fa-home">Home</i></a></li>
	<li><a href="about.php" <i class="fas fa-file-alt">About</i></a></li>
	<li><a href="#">menu</a>
	<ul>
		<li><a href="fast.php">Fast Food</a></li>
		<li><a href="south.php">South Indian Food</a></li>
		<li><a href="punjab.php">Punjabi Food</a></li>
		<li><a href="gujarat.php">Gujarati Food</a></li>
	</ul>
	</li>
	<li><a href="cart1.php" <i class="fas fa-shopping-cart">Order Cart</i></a></li>
	<li><a href="logout.php" <i class="fas fa-sign-out-alt">Logout</i></a></li>
</ul>
</nav>
</div>
<div class="text">
Our Mission</br> 
Shapping the future of food
</div>
</br>
</br>
<div class="who">
<h1> Who are we?</h1>
<p>Launched in Uttarakhand city Haldwani  within 1 month.</br>
Food Order is major scale project of Food ordering system.</br>
We not only connect people to food in every context but work </br>
closely with restaurants to enable a sustainable ecosystem.</p>
<div>
<div class="img">
<img src="photo/pic.jpg" width="350" height="200">
</div>
<div class="bul">
<h1> Language Used in Making project-:</h1>
<ul>
	<li>Html</li>
	<li>CSS</li>
	<li>JavaScript</li>
	<li>PHP</li>
	<li>MySql</li>
</ul>
</div>
<div class="pic">
<img src="photo/dd.jpg">
</div>

<div class="call">
<h1>OUR MOTO IS:</h1>
<ul>	
	<li>ALWAYS BE ON TIME</li></br>
	<li>DELIVER GOOD QUALITY FOOD AT YOUR DOOR</li></br>
	<li>PACKING OF FOOD IS EXCELLENT</li></br>
	<li>GIVING YOU THE FRESH FOOD</li></br>
</ul>
</div>

<div class="chef">
<h1> About Our Chef:-</h1>
<img src="photo/chef.jpg">
<p>In our Company there are many Chef who are making Food but our head Chef Mr.Lee is very talented and brilliant and cook amazing and delicious food which people have ever eaten in their life.They know all type of food recipe and the He doing his work will Full perfection and cleanness.Our all chef doing a great job and all over the india there work is spreading like hummor. Because of Our Chef we are survive in the field of competition.</p> 
 </div>
 </body>
 </html>
 <?php
 }
 ?>
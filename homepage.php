<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
}else{

?>
<html>
<head>
<link rel="stylesheet" href="file:///F:/fontawesome-free-5.12.1-web/css/all.css">
<link rel="stylesheet" type="text/css" href="fontawesome.min.css">
<script src="https://kit.fontawesome.com/5da368dd82.js"></script>
<style>
	body{
		margin:0;
		padding:0;
		font-family:sans-serif;
		background:#fff;
	
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
		visibility:visible;
		z-index:100;
	}
	nav ul ul li{
		width:200px;
		float:none;
		display:list-item;
		position:relative;
	}
	
	img{
		width:1360px;
		height:390px;
	}
	#slider{
		width:100%;
		height:390px;
		margin:10px auto;
		position:relative;
		
	}
	.text h1{
		color:white;
		font-size:50px;
		position:absolute;
		top:0%
	}
	
	button{

		padding:20px;	
		border:none;
		background:#ffffff00;
		font-size:30px;
		color:white;
		position:absolute;
		top:45%;

	}
	.next{
		border-radius:10px 0px 0px 10px;
		margin-left:1300px;
	}
	.prew{	
		border-radius:0px 10px 10px 0px;
	}
	.off h2{
		text-align:center;
		font-size:30px;
		color:red;
	}
	.off img{
		width:60%;
		height:200px;
		padding:0;
		margin-left:90px;
		box-shadow:10px 5px 5px black;
		margin-top:50px;		
	}
	.off p{
		text-align:center;
		font-size:20px;
		font-style:italic;
	}
	.end h3{
		background:#000;
		width:100%;
		height:5%;
		text-align:center;
		padding:0;
		color:white;
		font-size:10px;
		margin-top:1%;
		margin-left:0px;
	}
	
</style>
<script src="https://kit.fontawesome.com/5da368dd82.js"></script>
<body>
<div class="dropdwn">
<nav>
	<img class="logo" src="photo/logo.png">

<ul>
	<li><a href="#">welcome <?php echo $_SESSION['username'];?></a></li>
	<li><a href="homepage.php" <i class="fas fa-home">Home</i></a></li>
	<li><a href="about.php" <i class="fas fa-file-alt">About</i></a></li>
	<li><a href="#">Menu</a>
	<ul>
		<li><a href="fast.php">Fast Food</a></li>
		<li><a href="south.php">South Indian Food</a></li>
		<li><a href="punjab.php">Punjabi Food</a></li>
		<li><a href="gujarat.php">Gujarati Food</a></li>
	</ul>
	</li>
	<li><a href="cart1.php" <i class="fas fa-shopping-cart">Order Cart</i></a></li>
	<li><a href="logout.php" <i class="fas fa-sign-out-alt"></i>Logout</a></li>
</ul>
</nav>
</div>

<div id="slider">
	<div id="box">
		
		<img src="photo/b.jpg">
		<div class="text">
			<h1>Feeling Hungry</br> Order Mouth Watering</br> Food Online?</h1>
		</div>
	</div>
	<button class="prew fas fa-chevron-left" onclick="prewImage()"></button>
	<button class="next fas fa-chevron-right" onclick="nextImage()"></button>
	
</div>
<script type="text/javascript">
	var slider_content=document.getElementById('box');
	var image=['b','c'];
	var i=image.length;
	
	function nextImage(){
		if(i<image.length){
			i=i+1;
		}else{
			i=1;
		}
			slider_content.innerHTML="<img src="+image[i-1]+".jpg>";
	}

	function prewImage(){
		if(i<image.length+1 && i>1){
			i=i-1;
		}else{
			i=image.length;
		}
			slider_content.innerHTML="<img src="+image[i-1]+".jpg>";
	}
</script>

<div class="off">
<h2>Welcome To Multi Vendor Food Ordering System</h2>
 
<table border="0">
<tr>
	<td><img src="photo/golgappe.jpg"</br>	
	<p>Chocolate Golgappe</p></td>
	<td><img src="photo/frenchfries.jpg"></br>
	<p>Crispy French Fries</p></td>
	<td><img src="photo/magnumupsidedown.jpg"></br>
	<p>Magnum Upside Down Shake</p></td>
	
</tr>
</table>
</div>
<div class="end">
	<h3>©copyright</h3>
</div>
</body>
</html>
<?php
}
?>

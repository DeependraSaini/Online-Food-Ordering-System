<html>
<head>
<title>Dashboard</title>
<script src="https://kit.fontawesome.com/5da368dd82.js"></script>
<link rel="stylesheet" type="text/css" href="fontawesome.min.css">

</head>
</head>
<style>
	body{
		margin:0;
		padding:0;
		font-family:sans-serif;
		background-image:url('photo/images.jpeg');
		background-size:100%;
	}

	.dropdwn{
		margin:0 auto;
	}
	nav{
		width:100%;
		height:100px;
		background:#000;
	}
	
	nav ul{
		padding:0;	
		margin:0;
		float:right;
		margin-right:500px;
	}
	nav ul li{
		position:relative;
		list-style:none;
		display:inline-block;
	}
	nav ul li h1{
		display:block;
		padding:0px;
		color:white;
		text-decoration:none;
		line-height:10px;
		font-size:60px;

	}
	.circle{
		width:300px;
		height:300px;
		border-radius:50%;
		background:#ffff00;
		margin-top:10px;
		text-align:center;
		margin-left:300px;

	}
	.circle:after{
		content:'';
		padding-bottom:100%;
		display:block;
	}

	span a{
		position:absolute;
		top:50%;
		margin-top:-120px;
		margin-left:-100px;
		font-size:60px;
		color:#000;
		text-decoration:none;
	}
		
	.circle:hover
	{
		cursor:pointer;
		background:blue;
		color:#000;
	}
	
	.alt{
		width:300px;
		height:300px;
		border-radius:50%;
		background:#00ccff;
		margin-top:-300px;
		color:#fff;
		text-align:center;
		margin-left:800px;

	}
	.alt:after{
		content:'';
		padding-bottom:100%;
		display:block;
	}
	 a{
		position:absolute;
		top:50%;
		margin-top:-120px;
		margin-left:-90px;
		font-size:60px;
		color:yellow;
		text-decoration:none;
	}
	.alt:hover
	{
		cursor:pointer;
		background:orange;
		color:#000;
	}
	.text {

		width:100%;
		height:40%;
		padding:50px;	
		margin-top:100px;
		background:#ff0000;
		color:#fff;
		font-family:italic;
		font-weight:bold;
		padding-left:100px;
	}
	.text ul{
		padding:0px;	
		margin-top:-220px;
		background:#ff0000;
		color:#fff;
		padding-left:400px;
	}
	.text ol{
		padding:0px;	
		margin-top:-240px;
		background:#ff0000;
		color:#fff;
		padding-left:800px;
	}

</style>
<body>
<div class="dropdwn">
<nav>
<ul>
	<li><h1>DASHBOARD<h1></li>
</ul>
</nav>
</div>
<div class="circle">
	<span><a href="admin.php">ADMIN</a></span>
</div>

<div class="alt">
	<a href="login.php">USER</a>
</div>
	

<div class="text">

	<h3>CONTACT INFO</br></h3>
	Address No.XXXXXstreet</br>
	</br>
	Haldwani,Uttarakhand</br>
	</br>
	Mobile:9867XXXXXX</br>
	</br>
	Phone:9867XXXXXX</br>
	</br>
	Email:baba@gmail.com

<ul type=".">	
	<h3>MODULE</h3></br>
	<li>Admin Module</br></li>
	</br>
	<li>User Module</br></li>
	</br>
	<li>Login Module</br></li>
	</br>
	<li>Order Module</br></li>
	</br>
	<li>Logout Module</br></li>
</ul>
	
<ol type="i">	
	<h3>PROJECT LINKS</h3></br>
	<li>Home</li><br>
	<li>About Us</li></br>
	<li>Menu</li></br>
	<li>Order Cart</li><br>
	<li>Logout </li>
</ol>
	
	
</div>
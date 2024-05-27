<?php
	session_start();
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"database");
?>
<html>
<head>
<link rel="stylesheet" href="file:///F:/fontawesome-free-5.12.1-web/css/all.css">
<script src="https://kit.fontawesome.com/5da368dd82.js"></script>
<link rel="stylesheet" type="text/css" href="fontawesome.min.css">

<title> ONLINE FOOD ORERING WEBSITE</title>
<style>
	body{
		margin:0;
		padding:0;
		background:url('photo/rest.jpeg');
		background-size:100%;
		background-position:center;
		font-family:sans-serif;
	}
	.loginbox{
		width:320px;
		height:420px;
		background:black;
		color:#fff;
		top:50%;
		left:50%;
		position:absolute;
		transform:translate(-50%,-50%);
		box-sizing:border-box;
		padding:70px 30px;
		border-radius:40px;
	}
	.avatar{
		width:250px;
		height:100px;
		border-radius:50%;
		position:absolute;
		top:-50px;
		left:calc(50% -50px);
	}
	h1{
		margin:0 0 20px;
		padding:0 0 20px;
		text-align:center;
		font-size:22px;
	}
	.loginbox p{
		margin:0;
		padding:0;
		font-weight:bold;
	}
	.loginbox input{
		width:100%;
		margin-bottom:20px;
	}
	.loginbox input[type="text"], input[type="password"]
		{
		border:none;
		border-bottom:1px solid #fff;
		background:transparent;
		outline:none;
		height:40px;
		color:#fff;
		font-size:16px;
	}
	.loginbox input[type="submit"]
		{
		border:none;
		outline:none;
		height:40px;
		background:#fb2525;
		color:#fff;
		font-size:18px;
		border-radius:20px;
	}
	.loginbox input[type="submit"]:hover
	{
		cursor:pointer;
		background:#ffc107;
		color:#000;
	}
	.loginbox a{
		text-decoration:none;
		font-size:12px;
		line-height:20px;
		color:darkgrey;
	}
	.loginbox a:hover
	{
		color:#ffc107;
	}
</style>
<script src="https://kit.fontawesome.com/5da368dd82.js"></script>
</head>
<body>	
<div class="loginbox">
<img src="photo/avatar.jpg" class="avatar">
<h1>login Here</h1>
<form action="" method="POST">
<label for="tt1">
<p>USERNAME <i class="fas fa-user"></i></p></label>
<input type="text" name="username" placeholder="Enter Username" required/></br>
<label for="tt2">
<p>PASSWORD <i class="fas fa-key"></i></p></label>
<input type="password" name="password" placeholder="Enter Password" required/></br>
<input type="submit" name="login" value="LOGIN"/></br>
<a href="#" onclick="valid();"><font color="red">forget password?</font></a></br>
<script>
	function valid() {
		alert("This page is under construction.");
	}
</script>
<a href="registration.php"><font color="red">Don't have an account?</font></a>
</form>
</div>
<a href="dashboard.php"><font color="white">back</a>
<?php


if(isset($_POST['login'])){
	extract($_POST);
	$query="select * from user where username='$username' AND password='$password'";

	$run_query=mysqli_query($con,$query);
	if($run_query){
		if(mysqli_num_rows($run_query)>0){
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			header("Location:homepage.php");
		}
		else{
			echo "<script>alert('warning you have not enter correct data!...');window.location.href='login.php';</script>";
		}
	}
}

?>

</body>
</html>
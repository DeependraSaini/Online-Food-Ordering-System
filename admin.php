<?php
	session_start();
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"database");
?>

<html>
<head>
<title>admin page</title>
<script src="https://kit.fontawesome.com/5da368dd82.js"></script>
<link rel="stylesheet" type="text/css" href="fontawesome.min.css">

</head>
<style>
	body{
		margin:0;
		padding:0;
		background:url('photo/ad.jpeg');
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
		width:225px;
		height:120px;
		border-radius:50%;
		position:absolute;
		top:-50px;
		left:calc(50% -60px);
		background:#fff;
		left:50px;
	}
	th{
		margin:0 0 20px;
		padding:0 0 20px;
		text-align:center;
		font-size:22px;
		color:#fff;
	}
	.loginbox td p{
		margin:0;
		padding:0;
		font-weight:bold;
		font-size:20px;
		color:#fff;
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
<body>
<div class="loginbox">
<img src="photo/admini.png" class="avatar">
<table align="center" style="padding:20px;">
	<form action="" method="POST">
	<th colspan="2">Admin login</th>
	<tr>
		<td><p>Username<i class="fas fa-user"></i></p></br></td><td><input type="text" name="user"></td>
	</tr>
	<tr>
		<td><p>Password<i class="fas fa-key"></i></p></br></td><td><input type="password" name="pass"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="login" value="LOGIN"></td>
	</tr>
	
	</form>
</table>
</div>
<a href="dashboard.php"><font color="white">back</a>
<?php
if(isset($_POST['login'])) {
	$username=$_POST['user'];
	$password=$_POST['pass'];

	$query="SELECT * FROM admin WHERE uname='$username' AND upass='$password'";

	$run=mysqli_query($con,$query);

	if(mysqli_num_rows($run)>0) {
		$_SESSION['uname']=$username;
	
		$yourURL="index.php";
		echo ("<script>location.href='$yourURL'</script>");
	}else{
		echo "<script>alert('Unauthorized User')</script>";
	}	
}

?>
</body>
</html>
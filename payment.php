<html>
<head>
<link rel="stylesheet" href="file:///F:/fontawesome-free-5.12.1-web/css/all.css">
<script src="https://kit.fontawesome.com/5da368dd82.js"></script>
<link rel="stylesheet" type="text/css" href="fontawesome.min.css">

<title> payment system</title>
</head>
<style>
	body{
		margin:0;
		padding:0;
		background:url('photo/paye.jpg');
		background-size:100%;
		background-position:center;
		font-family:sans-serif;
	}
	.loginbox{
		width:320px;
		height:520px;
		background:blue;
		color:#fff;
		top:55%;
		left:50%;
		position:absolute;
		transform:translate(-50%,-50%);
		box-sizing:border-box;
		padding:70px 30px;
		border-radius:40px;
	}
	.pay{
		width:250px;
		height:100px;
		border-radius:50%;
		position:absolute;
		top:-50px;
		left:calc(70% -50px);
	}
	h1{
		margin:0 0 20px;
		padding:0 0 20px;
		text-align:center;
		font-size;22px;
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
<body>
<div class="loginbox">
<img src="photo/pay.png" class="pay">
<h1>Payment Here</h1>
<form action="pay.php" method="post">
<label for="tt1">
<p>Card_holder:</p></label>
<input type="text" name="Card_holder" placeholder="Enter holder name" required/></br>
<label for="tt2">
<p>Card_number:</p></label>
<input type="text" name="Card_number" placeholder="Enter Card number " maxlength="16" required/></br>
<label for="tt3">
<p>Expiry:</p></label>
<input type="text" name="Expiry" placeholder="mmdd" maxlength="5"required/>
<label for="tt4">
<p>CVC:</p></label>
<input type="text" name="CVV" placeholder="Enter CVC" maxlength="3" required/>
<input type="submit" value="Submit" name="pay"/>
</form>
</div>
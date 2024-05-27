<?php
session_start();
require 'connection.php';
if(!isset($_SESSION['username'])){
	header("location:login.php");
}else{


?>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<link rel="stylesheet" href="file:///F:/fontawesome-free-5.12.1-web/css/all.css">
<link rel="stylesheet" type="text/css" href="fontawesome.min.css">
<script src="https://kit.fontawesome.com/5da368dd82.js"></script>
</head>

<style>
	body{
		margin:0;
		padding:0;
		font-family:sans-serif;

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
	
	
	.table th{
		font-size:20px;
		color:#fff;	
		
	}
	.table input[type="submit"]
		{
		border:none;
		outline:none;
		height:40px;
		background:#fb2525;
		color:#fff;
		font-size:18px;
		border-radius:20px;
	}
	.table input[type="submit"]:hover
	{
		cursor:pointer;
		background:#233067;
		color:#000;
	}
	th{
		background:#ffc107;
		padding:30px;
		text-transform:uppercase;
	}
	.end h3{
		background:#000;
		width:100%;
		height:5%;
		text-align:center;
		padding:0;
		color:white;
		font-size:10px;
		margin-top:10%;
		margin-left:0px;
	}
	.container h1{
		font-size:50px;
	}
	.container p{
		font-size:20px;
</style>
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
	<li><a href="cart1.php" <i class="fas fa-shopping-cart" style="text-decoration:none; color:#fff;">Order cart</i></a></li>
	<li><a href="logout.php"  <i class="fas fa-sign-out-alt" style="text-decoration:none; color:#fff;">Logout</i></a></li>
</ul>
</nav>
</div>

	
<?php
if(!empty($_SESSION["cart1"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
        <h1>Your Shopping cart</h1>
        <p>Looks tasty...!!!</p>
        
      </div>
      
    </div>
    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="40%">Food Name</th>
<th width="9%">Quantity</th>
<th width="20%">Price Details</th>
<th width="15%">Order Total</th>
<th width="5%">Action</th>
</tr>
</thead>


<?php  

$total = 0;
foreach($_SESSION["cart1"] as $keys => $values)
{
?>
<tr>
<td><?php echo $values["food_name"]; ?></td>
<td><?php echo $values["food_quantity"] ?></td>
<td>&#8377; <?php echo $values["food_price"]; ?></td>
<td>&#8377; <?php echo number_format($values["food_quantity"] * $values["food_price"], 2); ?></td>
<td><a href="cart1.php?action=delete&id=<?php echo $values["food_id"]; ?>"><button class="btn btn-warning">Remove <span class="glyphicon glyphicon-trash"></span></button></a></td>
</tr>
<?php 
$total = $total + ($values["food_quantity"] * $values["food_price"]);
}
?>
<tr>
<td colspan="3" align="right">Total</td>
<td align="right">&#8377; <?php echo number_format($total, 2); ?></td>
<td></td>
</tr>
</table>
<?php
  echo '<a href="cart1.php?action=empty"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Empty cart1</button></a>&nbsp;<a href="check.php"><button class="btn btn-success pull-right"><span class="glyphicon glyphicon-share-alt"></span> Check Out</button></a>';
?>
</div>
<br><br><br><br><br><br><br>
<?php
}
if(empty($_SESSION["cart1"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
        <h1>Your Shopping cart</h1>
        <p>Oops! We can't smell any food here. Go back and order now.........</a></p>
        
      </div>
      
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
}
?>


<?php


if(isset($_POST["add"]))
{
if(isset($_SESSION["cart1"]))
{
$item_array_id = array_column($_SESSION["cart1"], "food_id");
if(!in_array($_GET["id"], $item_array_id))
{
$count = count($_SESSION["cart1"]);

$item_array = array(
'food_id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'food_quantity' => $_POST["quantity"]
);
$_SESSION["cart1"][$count] = $item_array;
echo '<script>window.location="cart1.php"</script>';
}
else
{
echo '<script>alert("Products already added to cart")</script>';
echo '<script>window.location="cart1.php"</script>';
}
}
else
{
$item_array = array(
'food_id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'food_quantity' => $_POST["quantity"]
);
$_SESSION["cart1"][0] = $item_array;
}
}
if(isset($_GET["action"]))
{
if($_GET["action"] == "delete")
{
foreach($_SESSION["cart1"] as $keys => $values)
{
if($values["food_id"] == $_GET["id"])
{
unset($_SESSION["cart1"][$keys]);
echo '<script>alert("Food has been removed")</script>';
echo '<script>window.location="cart1.php"</script>';
}
}
}
}

if(isset($_GET["action"]))
{
if($_GET["action"] == "empty")
{
foreach($_SESSION["cart1"] as $keys => $values)
{

unset($_SESSION["cart1"]);
echo '<script>alert("cart1 is made empty!")</script>';
echo '<script>window.location="cart1.php"</script>';

}
}
}

?>
<?php

?>

	
  
    </body>
</html>
<?php
}
?>	
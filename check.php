<?php
	session_start();
require 'connection.php';
if(!isset($_SESSION['username'])){
	header("location:login.php");
}else{

?>


<html>
<head>
<meta charset="UTF-8">
<title>Shopping Site</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<style>
	body{
		margin:0;
		padding:0;
		font-family:sans-serif;
		background:#fff;
	}
	
	.table h1{
		background-image:url("photo/paye.jpg");
		background-repeat:no-repeat;
		background-size:100%;
		width:100%;
		height:45%;
		text-align:center;
		padding:0;
		color:#D2691E;
		font-size:90px;
		margin-top:0px;
		margin-left:0px;
	}
	.table h2{
		font-size:50px;
		
	}
	.table p{
		text-align:center;
		font-size:20px;
	}
	
	 input[type="submit"]
		{
		border:none;
		outline:none;
		height:30px;
		width:185px;
		background:#008000;
		color:#fff;
		font-size:18px;
		border-radius:20px;
		margin-left:190px;
	}
	 input[type="submit"]:hover
	{
		cursor:pointer;
		background:#ffc107;
		color:#000;
	}
	
	
</style>	

</head>

<body>
<?php
$gtotal = 0;
  foreach($_SESSION["cart1"] as $keys => $values)
  {
	$F_ID = $values["food_id"];
    $name = $values["food_name"];
    $quantity = $values["food_quantity"];
    $price =  $values["food_price"];
	$username = $_SESSION['username'];
    $total = ($values["food_quantity"] * $values["food_price"]);
	
    $gtotal = $gtotal + $total;


     $query ="INSERT INTO `order detail`(`F_ID`,`name`,`quantity`,`price`,`username`) VALUES ('$F_ID','$name','$quantity','$price','$username')";
             

              $success = $conn->query($query);         

		if(!$success)
			{
		?>
				
 <?php
			}
      
  }

 ?>
        <div class="container">
          <div class="jumbotron">
            <h1>Choose your payment option</h1>
          </div>
        </div>
        <br>
<h1 class="text-center">Grand Total: &#8377;<?php echo "$gtotal"; ?>/-</h1>
<h5 class="text-center">including all service charges. (no delivery charges applied)</h5>
<br>
<h1 class="text-center">
  <a href="cart1.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go back to cart</button></a>
  <a href="payment.php"><button class="btn btn-success"><span class="glyphicon glyphicon-credit-card"></span> Pay Online</button></a>
  <a href="cash.php"><button class="btn btn-success"><span class="glyphicon glyphicon-"></span> Cash On Delivery</button></a>
</h1>
</body>
</html>
<?php
}
?>
        



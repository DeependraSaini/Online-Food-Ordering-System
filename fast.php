  <?php   
 session_start();  
 include_once('connection.php');
$query="select * from tproduct";
$result=mysqli_query($conn,$query);
if(!isset($_SESSION['username'])){
	header("location:login.php");
}else{

 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>menu</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		   <link rel="stylesheet" href="file:///F:/fontawesome-free-5.12.1-web/css/all.css">
			<script src="https://kit.fontawesome.com/5da368dd82.js"></script>
			<link rel="stylesheet" type="text/css" href="fontawesome.min.css">

      </head> 
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
	.text h1{
		background-image:url("photo/coffee.jpg");
		background-repeat:no-repeat;
		background-size:100%;
		width:100%;
		height:70%;
		text-align:center;
		padding:30px;
		color:white;
		font-size:90px;
		margin-top:0px;
		margin-left:0px;
	}
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
		<li><a href="cart1.php" <i class="fas fa-shopping-cart" style="text-decoration:none; color:#fff;">Order Cart</i></a></li>
		<li><a href="logout.php"  <i class="fas fa-sign-out-alt" style="text-decoration:none; color:#fff;">Logout</i></a></li>
		</ul>
	</nav>
	</div>

           <br />  
		   </br>
		   </br>
           <div class="text" style="width:100%; height:350px; margin-top:-60px;">  
                <h1 align="center">Fast Food</h1><br />  
	</div>
			<div class="hell" style="text-align:center; font-size:20px; background:#fff; border-radius:10px; width:100%; height:50px; font-family:italic; margin-top:-50px;">
					<h1> IT'S LOOK VERY TASTY HAVE SOME FUN!....</h1>
		</div>
                <?php    
                    while($row = mysqli_fetch_array($result))  
                    {  
                ?> 
					
                <div class="col-md-4" style="padding:40px; background:#D3D3D3;">  
					
                     <form method="post" action="cart1.php?action=add&id=<?php echo $row["F_ID"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; border-spacing:5px; width:300px; height:500px;" align="center">  
                               <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>  
                               <input type="number" name="quantity" class="form-control" value="1" max="7" min="1"/>  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
							  </br>
                               <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
				
                <?php  
                    }  
               
                ?>  
                
      </body>  
 </html>
 <?php
}
?>
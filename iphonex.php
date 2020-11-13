
<html>
<head>
<title>Product Details Page Design</title>
<link href="style.css" rel="stylesheet">
    <link rel="stylesheet"
	href="style2.css" >

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</head>
<body>
    <h1 align="center" style="font-family:Cursive;color:white;background-color:#FE980F;font-size:50px">
	    fIrSt ChOiCe
	</h1>
	<?php
		require('db.php');
		include("auth.php");
		 if (isset($_REQUEST['quantity']))
		 {
			$quantity=$_REQUEST['quantity'];
			$username=$_SESSION['username'];
			$product_id=1;
			$query    = "INSERT INTO `cart` (username, product_id,quantity)
                     VALUES ('$username','$product_id','$quantity')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3 align='center'>Your item is added to cart</h3><br/>
                  <p class='link' align='center'>Click here to <a href='index.php'>redirect to homepage</a></p>
                  </div>";
		    echo '<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
  <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
  <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
</svg>
		';
        } 
		 }
		 else{
			 
	?>
     <div class="container">
	 
	   <div class="row">
	     <div class="col-md-5">
		 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img1.jpg" class="d-block w-100" alt="First slide">
    </div>
    <div class="carousel-item">
      <img src="img2.jpg" class="d-block w-100" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="img3.jpg" class="d-block w-100" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	     </div>
		 <div class="col-md-7">
		     <p class="newarrival text-center">NEW</p>
			 <h2>Iphone's Latest collection iphoneX</h2>
			 <p>Product Code:ISRC2020</p>
			 <img src="star.png" class="stars">
			 <p class="price"> Rs60,000</p>
			 <p><b>Availability:</b> In Stock</p>
			 <p><b>Condition:</b> New</p>
			 <p><b>Brand:</b> Apple Company</p>
			 
			 <form class="form" action="" method="post"><label>Quantity:</label><input type="text" value="1" style="width:30px;height:33px" name="quantity">
			<input type="submit" name="submit" value="Add to cart" class="login-button" style="width:100px"></form>
	     </div>
	   </div>	 
		 </div><?php } ?>
</body>
</html>
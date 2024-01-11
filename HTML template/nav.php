<?php
	
	
	$connection = mysqli_connect("localhost","root","","maindbofb");
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">

	<script src="https://kit.fontawesome.com/fd869cf8ca.js" crossorigin="anonymous"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<header>
		<div class="t-nav py-1">
			<div class="name-nav">
				<a href="#" id="nam-nav">OutFromBox</a>
			</div>
			<div class="sec-nav">
				<a href="#" class="wish-nav">LOGIN</a>
				<a href="#" class="wish-nav">WISHLIST</a>
				<form action="#">
					<a href="#" class="py-2 rounded-pill color-danger-bg cart-n">
      		<span class="font-size-16 text-dark"><i class="fas fa-shopping-cart"></i></span>
      		<span class="px-3 py-1 rounded-pill bg-dark text-white">0</span>
      	</a>
				</form>
			</div>
		</div>

	<nav class="navbar navbar-expand-lg navbar-light py-0 ano-nav">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active text-white" href="#">Categories <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link text-white" href="#">Products</a>
      <a class="nav-item nav-link text-white" href="#">Customer Services</a>
    </div>
  </div>
</nav>
	</header>
<!--
		<div class="navbar navbar-light bg-white top-img py-0">
	<a href="#" class="nav-img"><img src="newlogoc.png" width="200" height="100" alt="OutFromBox logo"></a>

	<form action="#" class="search-btn">
		<input type="text" placeholder="Search something...">
		<button type="submit" class="btn-class"><i class="fa-solid fa-magnifying-glass"></i></button>
	</form>
</div>

-->


<!--
		<nav class="navbar navbar-light bg-light d-flex py-0">
  <a class="navbar-brand"><img src="newlogoc.png" width="200" height="100" alt="OutFromBox logo"></a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search something..." aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
  </form>
</nav>
-->







<!--
<nav class="navbar navbar-light py-0 bg-white">
  <a class="navbar-brand" href="#">
    <img src="newlogoc.png" width="200" height="100" class="d-inline-block align-top" alt="">
  </a>
  <form action="#">
  	  <div class="search">
  	<input type="text" placeholder="Search something..">
  	<button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
  </div>
  </form>

</nav>

-->
<div class="all-prod py-2">
	<?php 
	$sql = "select * from `product` limit 6" ?>
	<div class="p-item d-flex">
	<div class="item1">

				<a href="#"><img src="<?php echo $product['item_image']??'Unknown'; ?>" alt="1 product" width="200px" height="200px" alt="pro"></a>
				<h6>One Plus 8T</h6>
				<small>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
				</small><br>

				<span class="i-price">Rs.690</span><br>
				<small><s style="color:lightgray;">Rs.790</s></small>

</div>

<div class="item2">
			<div class="p-item2">
				<a href="#"><img src="1mobile.jpeg" alt="1 product" width="200px" height="200px" alt="pro"></a>
				<h6>Samsung Galaxy</h6>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
			</div>
			<span class="i-price">Rs.690</span><br>
				<small><s style="color:lightgray;">Rs.790</s></small>
</div>	

<div class="item3">
			<div class="p-item3">
				<a href="#"><img src="1tv.jpeg" alt="1 product" width="200px" height="200px" alt="pro"></a>
				<h6>Mi Television</h6>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
			</div>
			<span class="i-price">Rs.690</span><br>
				<small><s style="color:lightgray;">Rs.790</s></small>
</div>	

<div class="item4">
	<div class="p-item4">
		<a href="products.html"><img src="2mobile.jpeg" alt="1 product" width="200px" height="200px" alt="pro"></a>
			<h6>Redmi Note 10</h6>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
	</div>
	<span class="i-price">Rs.690</span><br>
				<small><s style="color:lightgray;">Rs.790</s></small>
</div>	

<div class="item5">
	<div class="p-item5">
		<a href="#"><img src="dart.png" alt="1 product" width="200px" height="200px" alt="pro"></a>
			<h6>Dart-Board</h6>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
	</div>
	<span class="i-price">Rs.690</span><br>
				<small><s style="color:lightgray;">Rs.790</s></small>
</div>

<div class="item6">
	<div class="p-item6">
		<a href="#"><img src="ojshirt.png" alt="1 product" width="200px" height="200px" alt="pro"></a>
			<h6>Orange t-shirt</h6>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
	</div>
	<span class="i-price">Rs.690</span><br>
				<small><s style="color:lightgray;">Rs.790</s></small>
</div>
</div><hr>

<div class="container-fluid doit d-flex">
<div class="item7">
		<div class="p-item">
				<a href="#"><img src="8t-green.png" alt="1 product" width="200px" height="200px" alt="pro"></a>
				<h6>One Plus 8T</h6>
				<small>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
				</small><br>

				<span class="i-price">Rs.690</span><br>
				<small><s style="color:lightgray;">Rs.790</s></small>

			</div>
</div>

<div class="item8">
			<div class="p-item2">
				<a href="#"><img src="1mobile.jpeg" alt="1 product" width="200px" height="200px" alt="pro"></a>
				<h6>Samsung Galaxy</h6>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
			</div>
			<span class="i-price">Rs.690</span><br>
				<small><s style="color:lightgray;">Rs.790</s></small>
</div>	

<div class="item9">
			<div class="p-item3">
				<a href="#"><img src="1tv.jpeg" alt="1 product" width="200px" height="200px" alt="pro"></a>
				<h6>Mi Television</h6>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
			</div>
			<span class="i-price">Rs.690</span><br>
				<small><s style="color:lightgray;">Rs.790</s></small>
</div>	

<div class="item10">
	<div class="p-item4">
		<a href="products.html"><img src="2mobile.jpeg" alt="1 product" width="200px" height="200px" alt="pro"></a>
			<h6>Redmi Note 10</h6>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
	</div>
	<span class="i-price">Rs.690</span><br>
				<small><s style="color:lightgray;">Rs.790</s></small>
</div>	

<div class="item11">
	<div class="p-item5">
		<a href="#"><img src="dart.png" alt="1 product" width="200px" height="200px" alt="pro"></a>
			<h6>Dart-Board</h6>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
	</div>
	<span class="i-price">Rs.690</span><br>
				<small><s style="color:lightgray;">Rs.790</s></small>
</div>

<div class="item12">
	<div class="p-item6">
		<a href="#"><img src="ojshirt.png" alt="1 product" width="200px" height="200px" alt="pro"></a>
			<h6>Orange t-shirt</h6>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
	</div>
	<span class="i-price">Rs.690</span><br>
				<small><s style="color:lightgray;">Rs.790</s></small>
</div>
</div>
</div>






	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>

<!---
	<div class="all-prod py-2">
	<?php foreach($product_list as $item) { ?>
		<div class="item1">
		<div class="p-item">
				<a href="#"><img src="<?php echo $item['item_image'] ?? "1mobile.jpeg" ?>" alt="1 product" width="180px" height="180px" alt="pro"></a>
				<h6 id="des-des"><?php echo $item['item_name']??'Unknown' ?></h6>
				<small>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
				</small><br>

				<span class="i-price">Rs.<?php echo $item['item_price']??'0.00' ?></span><br>
				<small><s style="color:lightgray;">Rs.<?php echo $item['item_prev_price']??'0.00' ?></s></small>

			</div>
</div>
<?php } ?>


</div>


second row
<div class="all-prod py-2">
	<?php foreach($product_list as $item) { ?>
	<div class="item1">
		<div class="p-item">
				<a href="#"><img src="<?php echo $item['item_image'] ?? "ojshirt.png" ?>" alt="1 product" width="180px" height="180px" alt="pro"></a>
				<h6><?php echo $item['item_name']??'Unknown' ?></h6>
				<small>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
				</small><br>

				<span class="i-price">Rs.<?php echo $item['item_price']??'0.00' ?></span><br>
				<small><s style="color:lightgray;">Rs.<?php echo $item['item_prev_price']??'0.00' ?></s></small>

			</div>
		
</div>
<?php }?>
</div>

-->


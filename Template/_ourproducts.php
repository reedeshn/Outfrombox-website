<?php
	
	$product_list = $product->getData();
	shuffle($product_list);
?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-indicators">
    	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
    	<a href="#">
     	<img src="saved.jpg" class="d-block w-100" width = 500 height = 400 alt="First mobile"></a>
    </div>

    <div class="carousel-item">
    	<a href="#">
     	<img src="menshort.jpg" class="d-block w-100" width = 500 height = 400 alt="First tv"></a>
    </div>

    <div class="carousel-item">
    	<a href="#">
      <img src="cleaner.jpg" class="d-block w-100" width = 500 height = 400 alt="second mobile"></a>
    </div>
  </div>

 	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
   		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    	<span class="visually-hidden">Previous</span>
  	</button>
 	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
   		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="visually-hidden">Next</span>
  </button>
</div>


<!--!header-->

<!--main site-->

<main class="main pt-2 px-5">
<div class="products px-3 pt-2">
	<span id="our-product">Our Products</span>
</div>

<div class="all-prod" id="c-prod">
	<?php foreach($product_list as $item):

	 ?>
		<div class="p-item">
		<div class="item1">
		
				<a href="<?php printf('%s?item_id=%s','productpage.php',$item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?? "1mobile.jpeg" ?>" alt="1 product" width="180px" height="180px" alt="pro"></a>
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
<?php 
	endforeach;
 ?>


</div>

<?php
	
	$product_list = $product->getMoreData();
	shuffle($product_list);
?>
<div class="all-prod" id="c-prod">
	<?php foreach($product_list as $item):

	 ?>
		<div class="p-item">
		<div class="item1">
		
				<a href="<?php printf('%s?item_id=%s','addcategory.php',$item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?? "1mobile.jpeg" ?>" alt="1 product" width="180px" height="180px" alt="pro"></a>
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
<?php 
	endforeach;
 ?>


</div>





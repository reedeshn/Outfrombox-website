<?php
	
	$product_list = $product-> getLocalData();
?>



<!--Local Products-->

<div class="products">
	<span id="our-product" class="px-3 pt-2">Local Products</span>
</div>

<main class="main">

<div class="all-prod py-3 pb-4">
	<?php foreach($product_list as $item):

	 ?>
		<div class="p-item">
		<div class="item1">
		
				<a href="<?php printf('%s?item_id=%s','localproduce.php',$item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?? "1mobile.jpeg" ?>" alt="1 product" width="180px" height="180px" alt="pro"></a>
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
	

<!--!New Products-->
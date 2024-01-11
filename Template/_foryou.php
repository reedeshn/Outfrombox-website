
<!---For you section--->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="constyle.css">

	<!--BootStrap CSS-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!--FontAwesome -->
	<script src="https://kit.fontawesome.com/fd869cf8ca.js" crossorigin="anonymous"></script>

	
</head>
<div class="products">
	<span id="our-product" class="px-3 pt-2">For You</span>
</div>

<?php
	
	$product_list = $product->getNewData();
	shuffle($product_list);
?>



<main class="main">

<div class="all-prod py-2" id="c-prod">
	<?php foreach($product_list as $item):

	 ?>
		<div class="p-item">
		<div class="item1">
		
				<a href="<?php printf('%s?item_id=%s','nproductpage.php',$item['item_id']) ?>"><img src="<?php echo $item['item_image'] ?? "1mobile.jpeg" ?>" alt="1 product" width="180px" height="180px" alt="pro"></a>
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


<!--!For you-->

</main>
<div class="topclass">
	<a href="#ta-nav"><p>Back to top</p></a>
</div>
<script type="text/javascript" src="Cindex.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!---Bootstrap JS Bundle-->

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

	<!--Isotope Jquery-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>
</html>
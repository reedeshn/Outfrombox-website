<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['item_id'],'wishlist');
    }

    if(isset($_POST['cart-submit'])){
        $Cart->wishList($_POST['item_id'],'cart','wishlist');
    }
}
?>


<!---Main site--->
<section id="cart" class="py-3">
     <div class="container-fluid w-auto">
        <h5>Wishlist</h5>

<!--  shopping cart items   -->
<div class="row">
    <div class="col-sm-9">

<?php 
                                   
    foreach($product->getData('wishlist') as $item):
        $cart = $product->getProduct($item['item_id']);
        $subTotal[] = array_map(function($item){
?>

<!-- cart item -->

<div class="row border-top py-3 mt-3" id="call-wish">
    <div class="col-sm-2">
        <img src="<?php echo $item['item_image']??"Cart" ?>" width="150px" height="150px" alt="cart1">
      </div>
    <div class="col-sm-8">
            <h5><?php echo $item['item_name']??"Unknown" ?></h5>
            <small>Sold by <b><?php echo $item['item_brand']??"Unknown" ?> </b></small>

	    <div class="pr-btn">

            

            <form method="post">
                <input type="hidden" value="<?php echo $item['item_id']??0 ?>" name="item_id">
			 <i class="fa-solid fa-trash"></i><button type="submit" name="delete-cart-submit" class="ct-del"> Delete</button>
            </form>

            <form method="post">
                <input type="hidden" value="<?php echo $item['item_id']??0 ?>" name="item_id">   
             <i class="fas fa-shopping-cart"></i><button type="submit" name="cart-submit"class="ct-wishlist"> Add To Cart</button>
            </form>
		</div>

    </div>

    <div class="col-sm-2 text-right" >
        <span id="ch-cl">Rs.</span><span id="ch-cl" class="product_price"><?php echo $item['item_price']??"Cart" ?></span>

       
    </div>
</div>

<!-- !cart item -->
<?php 
    return $item['item_price'];
    },$cart);
    endforeach; 
?>
 </div>



<!-- !subtotal section-->
</div>
<!--  !shopping cart items   -->
</div>
</section>
<!-- !Shopping cart section  -->

             
</main>


<!---!Main site-->

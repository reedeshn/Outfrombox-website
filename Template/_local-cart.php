<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }

    if(isset($_POST['wish-submit'])){
        $Cart->wishList($_POST['item_id']);
    }
}
?>



<!---Main site--->
<section id="cart" class="py-3">
     <div class="container-fluid w-auto">
        <h5>Shopping Cart</h5>

<!--  shopping cart items   -->
<div class="row">
    <div class="col-sm-9">

<?php 
                                   
    foreach($product->getLocalData('cart') as $item):
        $cart = $product->getLocalProduct($item['item_id']);
        $subTotal[] = array_map(function($item){
?>

<!-- cart item -->

<div class="row border-top py-3 mt-3">
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
                 <i class="fa-regular fa-heart"></i><button type="submit" name="wish-submit" class="ct-wishlist"> Move To Wishlist</button>
            </form>
		</div>

    </div>

    <div class="col-sm-2 text-right" >
        <span id="ch-cl">Rs.</span><span id="ch-cl" class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price']??"Cart" ?></span>

        <div class="qtn" id="call-btn">
            
            <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fa-solid fa-plus"></i></button>
            <input type="text" class="qty_input" data-id="<?php echo $item['item_id'] ?? '0'; ?>" disabled value="1" placeholder="1">
            <button class="qty-down border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fa-solid fa-minus"></i></button>&nbsp;&nbsp;
        </div>
    </div>
</div>

<!-- !cart item -->
<?php 
    return $item['item_price'];
    },$cart);
    endforeach; 
?>
 </div>

<!-- subtotal section-->

<div class="col-sm-3">
    <div class="sub-total border order-sum text-center mt-2 px-2">
        <h5 class="py-3">Order Summary</h5>
            <div class="border-top py-4">
                <h5 class="text-success">Subtotal (<?php echo count($product->getData('cart')); ?> item):&nbsp; Rs.<span class="text-success" id="deal_price"><?php echo isset($subTotal)?$Cart->getSom($subTotal):0 ?></span>  </h5>
                <button type="submit" class="checkout btn mt-3">CHECKOUT</button>
            </div>
    </div>
    </div>

<!-- !subtotal section-->
</div>
<!--  !shopping cart items   -->
</div>
</section>
<!-- !Shopping cart section  -->

             
</main>


<!---!Main site-->

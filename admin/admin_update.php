<?php
require('top.inc.php');
isAdmin();

@include 'config.php';

$id = $_GET['edit'];

if(isset($_POST['update_product'])){

   $product_name = $_POST['product_name'];
   $product_brand = $_POST['product_brand'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_brand) || empty($product_price) || empty($product_image)){
      $message[] = 'Please fill out all the fields!';    
   }else{

      $update_data = "UPDATE product SET item_name='$product_name',item_brand = '$product_brand', item_price='$product_price', item_image='$product_image'  WHERE item_id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location:admin_page.php');
      }else{
         $$message[] = 'Please fill out all the fields!'; 
      }

   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="admincss/style.css">
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM product WHERE item_id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">Update the product</h3>
      <h5 style="padding-top: 4px;">Enter product name</h5>
      <input type="text" class="box" name="product_name" value="<?php echo $row['item_name']; ?>" placeholder="Enter the product name">
      <h5>Enter product brand</h5>
      <input type="text" class="box" name="product_brand" value="<?php echo $row['item_brand']; ?>" placeholder="Enter the product brand">
      <h5>Enter product price</h5>
      <input type="number" min="0" class="box" name="product_price" value="<?php echo $row['item_price']; ?>" placeholder="Enter the product price">
      <h5>Enter product image</h5>
      <input type="file" class="box" name="product_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="update product" name="update_product" class="btn">
      <a href="admin_page.php" class="btn">Go Back</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>
         
<?php
require('footer.inc.php');
?>
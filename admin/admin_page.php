<?php

require('top.inc.php');
isAdmin();

@include 'config.php';

if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   $product_brand = $_POST['product_brand'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_brand)|| empty($product_price) || empty($product_image)){
      $message[] = 'Please fill out all the fields';
   }else{
      $insert = "INSERT INTO product(item_name,item_brand, item_price, item_image) VALUES('$product_name','$product_brand', '$product_price', '$product_image')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'New product added successfully';
      }else{
         $message[] = 'Couldnot add the product';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM product WHERE item_id = $id");
   header('location:admin_page.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin panel</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="admincss/style.css">

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

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>Add a new product</h3>
         <input type="text" placeholder="Enter product name" name="product_name" class="box">
         <input type="text" placeholder="Enter product brand" name="product_brand" class="box">
         <input type="number" placeholder="Enter product price" name="product_price" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
         <input type="submit" class="btn" name="add_product" value="add product">
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM product");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Brand</th>
            <th>Product Price</th>
            <th>Action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><img src="uploaded_img/<?php echo $row['item_image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['item_name']; ?></td>
            <td><?php echo $row['item_brand']; ?></td>
            <td>Rs.<?php echo $row['item_price']; ?>/-</td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['item_id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="admin_page.php?delete=<?php echo $row['item_id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>

</html>
<?php
require('footer.inc.php');
?>
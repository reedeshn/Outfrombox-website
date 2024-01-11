<?php

require('top.inc.php');
isAdmin();

@include 'config.php';
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


   <?php

   $select = mysqli_query($conn, "SELECT * FROM cart");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>

         	      
         <tr>

            <th>Cart ID</th>
            <th>Item ID</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){?>
         <tr>

            <td><?php echo $row['cart_id']; ?></td>
            <td><?php echo $row['item_id']; ?></td>
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
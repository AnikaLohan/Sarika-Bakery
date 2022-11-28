


<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>


<!--<!DOCTYPE html>
<html lang="en">
     head Section begins Here 
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="with=device-width, initial-scale=0.1">
       
        <title>Sarika's Bakery</title>
        <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    
    </head>
    head Section Ends Here 
    <body>

        header Section begins Here -->
        
    
<header>
            <a href="" class="logo"><img src="images/saritabakery.png" width="80px" height="80px"></a>
            <nav class="navbar">
                <a href="index.php">home</a>
                <a href="menu.php">menu</a>
                <a href="category.php">category</a>
                <a href="about.php">about</a>
                <a href="review.php">review</a>
                <a href="contact.php">Contact</a>
            </nav>

              <!--search bar
              
                <div class="search">
                   <input type="text" class="searchTerm" placeholder="Search For Food..">
                   <button type="submit" class="searchButton">
                     <i class="fa fa-search"></i>
                  </button>
                </div>
             
                                                                                           

            search bar ends-->

            <div class="icon">
         <?php
            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_items = $count_cart_items->rowCount();
         ?>
         <a href="search.php" class="fas fa-search"></a>
         <a href="cart.php" class="fas fa-shopping-cart"><span>(<?= $total_cart_items; ?>)</span></a>
         
         
      </div>

      <!--<div class="icon">
                
                <a href="profile.php" class="fas fa-user"></a>
                <a href="order_history.php" class="fas fa-first-order"></a>
                <a href="logout.php" class="fa fa-user"></a>
                <a href="login_register.php" class="fa fa-sign-in"></a>
                <a href="shop_cart.php" class="fas fa-shopping-cart"></a>
                


                
            </div>-->

            <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p class="name"><?= $fetch_profile['name']; ?></p>
         <div class="flex">
            <a href="profile.php" class="btn">profile</a>
            <a href="components/user_logout.php" onclick="return confirm('logout from this website?');" class="btn">logout</a>
         </div>
         <p class="account">
            <a href="login.php">login</a> or
            <a href="register.php">register</a>
         </p> 
         <?php
            }else{
         ?>
            <p class="name">please login first!</p>
            <a href="login.php" class="btn">login</a>
         <?php
          }
         ?>
      </div>

   </section>

</header>




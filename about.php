<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>Easy to order.<br/>
            Simple Registration Process.<br/>
            Cash on delivery options provide.<br/>
             One Click Checkout Options.<br/>
            Category wise Shopping Options.

</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>Good Quality prodects.<br/>
         The customer can pay through credit card and Cash on Delivery.<br/> 
         Customer can see the order details and the actions done to her/his orders.  
         </p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Top  Reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/aaa.png" alt="">
         <p><b>Amazing service.</b><br/>
              <!-- ordered late in the day and it came the very next day.
            It was very reasonably priced and there was even a couple of complimentary products. I shall definitely be ordering again.</p>-->
         <div class="stars">
            <i style="color:Green;" class="fas fa-star"></i>
            <i style="color:Green;" class="fas fa-star"></i>
            <i style="color:Green;" class="fas fa-star"></i>
            <i style="color:Green;" class="fas fa-star"></i>
            <i style="color:Green;" class="fas fa-star"></i>
         </div>
         <h3> name</h3>
      </div>

      <div class="box">
         <img src="images/aaa.png" alt="">
         <p><b>Good service</b><br/>
           <!-- Good service, fair price, fresh veggies, fast delivery. I would shop again.</p>-->
         <div class="stars">
            <i style="color:#27AE60;" class="fas fa-star"></i>
            <i style="color:#27AE60;" class="fas fa-star"></i>
            <i style="color:#27AE60;" class="fas fa-star"></i>
            <i style="color:#27AE60;" class="fas fa-star"></i>
         </div>
         <h3> name</h3>
      </div>

      <div class="box">
         <img src="images/aaa.png" alt="">
         <p><b>It says next day delivery but it took 5 days.</b><br/>
           <!-- On the website it says next day delivery but this is not correct. I ordered on a Friday morning, my adress is in Kr Puram, they just shipped it on Monday afternoon. 
            Almost a week long process.</p>-->
         <div class="stars">
            <i style="color:Red;" class="fas fa-star"></i>
            
         </div>
         <h3>name</h3>
      </div>

      <div class="box">
         <img src="images/aaa.png" alt="">
         <p><b>Fast delivery</b><br/>
            <!-- Fast delivery, Good quality, Thanks..</p>-->
         <div class="stars">
            <i style="color:#FF9800;" class="fas fa-star"></i>
            <i style="color:#FF9800;" class="fas fa-star"></i>
            <i style="color:#FF9800;" class="fas fa-star-half-alt"></i>
         </div>
         <h3>name</h3>
      </div>

      <div class="box">
         <img src="images/aaa.png" alt="">
         <p><b>Fresh products.</b><br/>
           <!-- Fresh products, good quality and time. Keep doing same quality.thanks....</p>-->
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>name</h3>
      </div>

      <div class="box">
         <img src="images/aaa.png" alt="">
         <p><b>Great shopping experience.</b><br/>
               <!--Products were nicely and robustly packaged. I would definitely shop from them again.</p>-->
         <div class="stars">
            <i style="color:#27AE60;" class="fas fa-star"></i>
            <i style="color:#27AE60;" class="fas fa-star"></i>
            <i style="color:#27AE60;" class="fas fa-star"></i>
            <i style="color:#27AE60;" class="fas fa-star"></i>
            <i style="color:#27AE60;" class="fas fa-star-half-alt"></i>
         </div>
         <h3>name</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
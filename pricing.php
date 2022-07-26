<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pricing</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="pricing">

   <h1 class="heading">Our Pricing</h1>

   <div class="box-container">

      <div class="box">
         <h3>Basic Plan</h3>
         <div class="price">25000/-</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> Photography</p>
            <p> <i class="fas fa-check"></i> Bribe makeup</p>
            <p> <i class="fas fa-check"></i> Wdding ceromony</p>
            <p> <i class="fas fa-check"></i> Meals & drinks</p>
            <p> <i class="fas fa-check"></i> Guest invitations</p>
         </div>
         <a href="contact.php" class="btn">Choose Plan</a>
      </div>

      <div class="box">
         <h3>Premium Plan</h3>
         <div class="price">65000/-</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> Photography</p>
            <p> <i class="fas fa-check"></i> Bribe makeup</p>
            <p> <i class="fas fa-check"></i> Wedding ceromony</p>
            <p> <i class="fas fa-check"></i> Meals & drinks</p>
            <p> <i class="fas fa-check"></i> Guest invitations</p>
         </div>
         <a href="contact.php" class="btn">Choose plan</a>
      </div>

      <div class="box">
         <h3>Ultimate Plan</h3>
         <div class="price">125000/-</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> Photography</p>
            <p> <i class="fas fa-check"></i> Bribe makeup</p>
            <p> <i class="fas fa-check"></i> Wedding ceromony</p>
            <p> <i class="fas fa-check"></i> Meals & drinks</p>
            <p> <i class="fas fa-check"></i> Guest invitations</p>
         </div>
         <a href="contact.php" class="btn">Choose Plan</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="heading">Happy Clients</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <h3>Vishal Anand</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <h3>Sneha Kauswal</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <h3>Abhijeet Kumar</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <h3>Ankit Prakash</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <h3>Sohaib Akhtar</h3>
            <p>Wonderful,everyone go for it</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <h3>Sushmita Saha</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- font awesome cnd link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts -->

<section class="header">

  <a href="home.php" class="logo"><span>T</span>raval</a>

   <nav class="navbar">
     <a href="home.php">home</a>
     <a href="about.php">about</a>
     <a href="package.php">package</a>
     <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- java script for header section starts  -->
<script>
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}</script>

<!-- java script for header section ends  -->

<!-- header section ends -->

<div class="heading" style="background:url(images/pexels.jpg) no-repeat">
    <h1>about us</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="images/about-imag.jpg" alt="">
   </div>

   <div class="content">
     <h3>why choose us?</h3>
     <p>people who travel for fun get to experience and indulge in refreshing
         things which may serve as a stress reducer in their lives. The culture,architecture</p>
     <p>people who travel for fun get to experience and indulge in refreshing
         things which may serve as a stress reducer in their lives. The culture,architecture</p>
         <div class="icon-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span>top destinations</span>
            </div>
            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable price</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 guide service</span>
            </div>
         </div>
   </div>

</section>

<!-- about section ends -->

<!-- review section starts  -->

<secion class="review">

      <h1 class="stylish-heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
      </h1>

      <div class="swiper-container review-slider">

         <div class="swiper-wrapper">

             <div class="swiper-slide">
                 <div class="box">
                     <img src="images/model-2911332.jpg" alt="">
                     <h3>rohan</h3>
                     <p>people who travel for fun get to experience and indulge in refreshing
                       things which may serve as a stress reducer in their lives. The culture,architecture,</p>
                       <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                       </div>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="box">
                     <img src="images/woman-3116587.jpg" alt="">
                     <h3>sofia</h3>
                     <p>people who travel for fun get to experience and indulge in refreshing
                       things which may serve as a stress reducer in their lives. The culture,architecture,</p>
                       <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                       </div>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="box">
                     <img src="images/model-2911363.jpg" alt="">
                     <h3>john deo</h3>
                     <p>people who travel for fun get to experience and indulge in refreshing
                       things which may serve as a stress reducer in their lives. The culture,architecture,</p>
                       <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                       </div>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="box">
                     <img src="images/girl-2209147.jpg" alt="">
                     <h3>Elizabeth</h3>
                     <p>people who travel for fun get to experience and indulge in refreshing
                       things which may serve as a stress reducer in their lives. The culture,architecture,</p>
                       <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                       </div>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="box">
                     <img src="images/model-1.jpg" alt="">
                     <h3>Aurora</h3>
                     <p>people who travel for fun get to experience and indulge in refreshing
                       things which may serve as a stress reducer in their lives. The culture,architecture,</p>
                       <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                       </div>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="box">
                     <img src="images/model-2.jpg" alt="">
                     <h3>maya</h3>
                     <p>people who travel for fun get to experience and indulge in refreshing
                       things which may serve as a stress reducer in their lives. The culture,architecture,</p>
                       <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                       </div>
                 </div>
             </div>

         </div>

      </div>

 </section>

  <!-- swiper js link -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- swiper js script starts -->
<script>
         var swiper = new Swiper(".review-slider", {
          spaceBetween: 20,
          loop: true,
          autoplay: {
            delay: 2000,
            disableOnInteration: false,
          },
          breakpoints: {
            640: {
              slidesPerView: 1,
            },
            768: {
              slidesPerView: 2,
            },
            1024: {
              slidesPerView: 3,
            },
          }

         });
     </script>

<!-- swiper js script ends -->

<!-- review section ends  -->



<!-- footer section start  -->

<section class="footer">

   <div class="box-container">
  
      <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
        <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
        <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> ask question</a>
        <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> term of use</a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +91-8968-150-832</a>
        <a href="#"> <i class="fas fa-phone"></i> +91-8968-150-832</a>
        <a href="#"> <i class="fas fa-envelope"></i> sonisaurav211@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i> amritsar, india - 143001</a>
      </div>
   
      <div class="box">
        <h3>folow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
        <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
      </div>

  </div>

<div class="credit"> created by <span>MR. SAURAV SONI</span> | all rights reserved! </div>

</section>

<!-- footer section end  -->


</body>
</html>


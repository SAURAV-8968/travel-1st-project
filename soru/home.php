<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

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

<!-- home section starts  -->

<section class="home">

 <div class="swiper home-slider">
  
     <div class="swiper-wrapper">

       <div class="swiper-slide slide" style="background:url(images/home-bg-1.jpg) no-repeat">
           <div class="content">
               <span>explore, discover, travel</span>
               <h3>travel around the world</h3>
               <a href="package.php" class="btn">discover more</a>
           </div>
       </div>
      
       <div class="swiper-slide slide" style="background:url(images/home-bg-2.jpg) no-repeat">
           <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="package.php" class="btn">discover more</a>
           </div>
       </div>

       <div class="swiper-slide slide" style="background:url(images/home-bg-3.jpg) no-repeat">
           <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worldwhile</h3>
               <a href="package.php" class="btn">discover more</a>
           </div>
       </div>

    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

  </div>
</section>

 <!-- swiper js link -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- swiper js script starts -->
<script>
         var swiper = new Swiper(".home-slider", {
          cssMode: true,
          loop: true,
          navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
         },
         pagination: {
         el: ".swiper-pagination",
         type:"bullets",
         loop: "true",
         clickable:"true",
        },
           mousewheel: true,
          keyboard: true,
         });
</script>

<!-- swiper js script ends -->

<!-- home section ends  -->

<!-- services section starts -->

<section class="services">

    <h1 class="stylish-heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

         <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>hotels are very good hotels are very good hotels are very good hotels are very good
                 hotels are very good hotels are very good hotels are very good hotels are very good </p>
         </div>
         <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>hotels are very good hotels are very good hotels are very good hotels are very good
                 hotels are very good hotels are very good hotels are very good hotels are very good </p>
         </div>
         <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safty guide</h3>
            <p>hotels are very good hotels are very good hotels are very good hotels are very good
                 hotels are very good hotels are very good hotels are very good hotels are very good </p>
         </div>
         <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the world</h3>
            <p>hotels are very good hotels are very good hotels are very good hotels are very good
                 hotels are very good hotels are very good hotels are very good hotels are very good </p>
         </div>
         <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p>hotels are very good hotels are very good hotels are very good hotels are very good
                 hotels are very good hotels are very good hotels are very good hotels are very good </p>
         </div>
         <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p>hotels are very good hotels are very good hotels are very good hotels are very good
                 hotels are very good hotels are very good hotels are very good hotels are very good </p>
         </div>

    </div>
</section>
<!-- services section ends -->

<!-- home about section starts -->

<section class="home-about">

  <div class="image">
      <img src="images/about-imag.jpg" alt="">
  </div>

  <div class="content">
      <h3>about us</h3>
      <p>people who travel for fun get to experience and indulge in refreshing
         things which may serve as a stress reducer in their lives. The culture,
         architecture,cuisine and more of the place can open our mind to new things.</p>
         <a href="about.php" class="btn">read more</a>
  </div>

</section>
<!-- home about section ends -->

<!-- home package section starts  -->

<section class="home-packages">

          <h1 class="stylish-heading">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
          </h1>

          <div class="box-container">

              <div class="box">
                <img src="images/maldives.jpg" alt="">
                 <div class="content">
                     <h3> <i class="fas fa-map-marker-alt"></i> maldives </h3>
                     <p>Agra is famous for Taj Mahal but that is not all that there is to it.
                     Every monument is just beautiful. The monument is one of the seven wonders of the world.</p>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                     <div class="price"> $5500.00 <span>$6000.00</span> </div>
                     <a href="book.php" class="btn"> book now</a>
                 </div>
              </div>

              <div class="box">
                <img src="images/sri lanka.jpg" alt="">
                 <div class="content">
                     <h3><i class="fas fa-map-marker-alt"></i> sri lanka </h3>
                     <p> its stunning scenic locales, Buddhist temples and pristine environment.</p>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                     <div class="price"> $2000.00 <span>$2400.00</span> </div>
                     <a href="book.php" class="btn"> book now</a>
                 </div>
              </div>

              <div class="box">
                <img src="images/kashmir.jpg" alt="">
                 <div class="content">
                     <h3><i class="fas fa-map-marker-alt"></i> kashmir </h3>
                     <p>Create romantic memories in idyllic Gulmarg, walk hand in hand by Srinagar’s Dal Lake etc.
                       Book holiday package </p>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <div class="price"> $1000.00 <span>$1500.00</span> </div>
                     <a href="book.php" class="btn"> book now</a>
                 </div>
              </div>

          </div>

  <div class="load-more"> <a href="package.php" class="btn">load more</a></div>

</section>
<!-- home package section ends -->

<!-- home offer section starts -->

<section class="home-offer">
  <div class="content">
    <h3>upto 50% off</h3>
    <p>people who travel for fun get to experience and indulge in refreshing
         things which may serve as a stress reducer in their lives. The culture,architecture,</p>
         <a href="book.php" class="btn">book now</a>
  </div>
</section>

<!-- home offer section ends -->
















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


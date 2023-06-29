<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>packages</title>

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

<div class="heading" style="background:url(images/home-bg-2.jpg) no-repeat">
    <h1>packages</h1>
</div>

<!-- package section starts  -->

<section class="packages">

          <h1 class="stylish-heading">
            <span>t</span>
            <span>o</span>
            <span>p</span>
            <span class="space"></span>
            <span>d</span>
            <span>e</span>
            <span>s</span>
            <span>t</span>
            <span>i</span>
            <span>n</span>
            <span>a</span>
            <span>t</span>
            <span>i</span>
            <span>o</span>
            <span>n</span>
            <span>s</span>
          </h1>

          <div class="box-container">

              <div class="box">
                <img src="images/dubai.jpg" alt="">
                 <div class="content">
                     <h3> <i class="fas fa-map-marker-alt"></i> dubai</h3>
                     <p>travel travel travel travel travel travel travel travel </p>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                     <div class="price"> $3600.00 <span>$5000.00</span> </div>
                     <a href="book.php" class="btn"> book now</a>
                 </div>
              </div>

              <div class="box">
                <img src="images/sri lanka.jpg" alt="">
                 <div class="content">
                     <h3> <i class="fas fa-map-marker-alt"></i> sri lanka </h3>
                     <p>travel travel travel travel travel travel travel travel </p>
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
                <img src="images/bangkok.jpg" alt="">
                 <div class="content">
                     <h3> <i class="fas fa-map-marker-alt"></i> bangkok </h3>
                     <p>travel travel travel travel travel travel travel travel </p>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                     <div class="price"> $1500.00 <span>$2000.00</span> </div>
                     <a href="book.php" class="btn"> book now</a>
                 </div>
              </div>

              <div class="box">
                <img src="images/swizerland.jpg" alt="">
                 <div class="content">
                     <h3> <i class="fas fa-map-marker-alt"></i> switzerland </h3>
                     <p>travel travel travel travel travel travel travel travel </p>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                     <div class="price"> $4000.00 <span>$5000.00</span> </div>
                     <a href="book.php" class="btn"> book now</a>
                 </div>
              </div>

              <div class="box">
                <img src="images/Christ the Redeemer.jpg" alt="">
                 <div class="content">
                     <h3> <i class="fas fa-map-marker-alt"></i> Christ the Redeemer </h3>
                     <p>travel travel travel travel travel travel travel travel </p>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                     <div class="price"> $1000.00 <span>$1200.00</span> </div>
                     <a href="book.php" class="btn"> book now</a>
                 </div>
              </div>

              <div class="box">
                <img src="images/Plitvice Lakes National Park.jpg" alt="">
                 <div class="content">
                     <h3> <i class="fas fa-map-marker-alt"></i> Plitvice Lakes National Park </h3>
                     <p>travel travel travel travel travel travel travel travel </p>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                     <div class="price"> $1500.00 <span>$2000.00</span> </div>
                     <a href="book.php" class="btn"> book now</a>
                 </div>
              </div>

              <div class="box">
                <img src="images/maldives.jpg" alt="">
                 <div class="content">
                     <h3> <i class="fas fa-map-marker-alt"></i> maldives </h3>
                     <p>travel travel travel travel travel travel travel travel </p>
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
                <img src="images/Amsterdam.jpg" alt="">
                 <div class="content">
                     <h3> <i class="fas fa-map-marker-alt"></i> amsterdam </h3>
                     <p>travel travel travel travel travel travel travel travel </p>
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
                <img src="images/Barcelona.jpg" alt="">
                 <div class="content">
                     <h3> <i class="fas fa-map-marker-alt"></i> barcelona </h3>
                     <p>travel travel travel travel travel travel travel travel </p>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                     <div class="price"> $1000.00 <span>$1200.00</span> </div>
                     <a href="book.php" class="btn"> book now</a>
                 </div>
              </div>

              <div class="box">
                <img src="images/paris.jpg" alt="">
                 <div class="content">
                     <h3> <i class="fas fa-map-marker-alt"></i> paris </h3>
                     <p>travel travel travel travel travel travel travel travel </p>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                     <div class="price"> $1200.00 <span>$1500.00</span> </div>
                     <a href="book.php" class="btn"> book now</a>
                 </div>
              </div>

              <div class="box">
                <img src="images/Rio de Janeiro.jpg" alt="">
                 <div class="content">
                     <h3> <i class="fas fa-map-marker-alt"></i> Rio de Janeiro </h3>
                     <p>travel travel travel travel travel travel travel travel </p>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                     <div class="price"> $900.00 <span>$1200.00</span> </div>
                     <a href="book.php" class="btn"> book now</a>
                 </div>
              </div>

              <div class="box">
                <img src="images/rome.jpg" alt="">
                 <div class="content">
                     <h3> <i class="fas fa-map-marker-alt"></i> rome </h3>
                     <p>travel travel travel travel travel travel travel travel </p>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                     <div class="price"> $900.00 <span>$1300.00</span> </div>
                     <a href="book.php" class="btn"> book now</a>
                 </div>
              </div>

       </div>
 
          <div class="load-more"><span class="btn">load more</span></div>

</section>

<!-- java script for packages section starts  -->

<script>
    let loadMoreBtn = document.querySelector('.packages .load-more .btn');
    let currentItem = 3;

    loadMoreBtn.onclick = () =>{
        let boxes = [...document.querySelectorAll('.packages .box-container .box ')];
        for (var i = currentItem; i < currentItem + 3; i++){
            boxes[i].style.display = 'inline-block';            
        };
        currentItem += 3;
        if(currentItem >= boxes.length){
            loadMoreBtn.style.display = 'none';
        }
    }
</script>

<!-- java script for packages section ends  -->

<!-- package section ends  -->


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


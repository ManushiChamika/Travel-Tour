<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>

<!-- header section starts -->
<section class="header">

    <a href="home.php" class="logo">travel.</a>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts -->

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(./css/images/home_one.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3> 
                    <a href="package.php" class="btn">discover mode</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(./css/images/home2.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new places</h3> 
                    <a href="package.php" class="btn">discover mode</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(./css/images/home3.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Make your tour worthwhile</h3> 
                    <a href="package.php" class="btn">discover mode</a>
                </div>
            </div>
        </div>
        
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</section>

<!-- services section start -->
<section class="services">

    <h1 class="heading-title"> our services </h1>
    <div class="box-container">
        <div class="box">
            <img src="./css/images/icon1.png" alt="icon of adventures">
            <h3>adventures</h3>
        </div>

        <div class="box">
            <img src="./css/images/icon2.png" alt="icon of tour guide">
            <h3>tour guide</h3>
        </div>

        <div class="box">
            <img src="./css/images/icon3.png" alt="icon of trekking">
            <h3>trekking</h3>
        </div>

        <div class="box">
            <img src="./css/images/icon4.png" alt="icon of camp fire">
            <h3>camp fire</h3>
        </div>

        <div class="box">
            <img src="./css/images/icon5.png" alt="icon of off road">
            <h3>off road</h3>
        </div>

        <div class="box">
            <img src="./css/images/icon6.png" alt="icon of camping">
            <h3>camping</h3>
        </div>
    </div>
</section>

<!-- services section ends -->

<!-- home about section starts -->

<section class="home-about">

    <div class="image">
        <img src="./css/images/about1.jpg" alt="couple holding hands"/>
    </div> 
    
     <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <a href="about.php" class="btn">read more</a>
    </div>

</section>
<!-- home about section ends -->

<!-- home packages section starts -->

<section class="home-packages">
    <h1 class="heading-title"> our packages </h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="./css/images/about3.jpg" alt="tourism place">
            </div>
            <div class="content">
                <h3>adventures and tour</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit!</p>
                <a href="book.php" class="btn"> book now </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./css/images/about2.jpg" alt="tourism place">
            </div>
            <div class="content">
                <h3>adventures and tour</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit!</p>
                <a href="book.php" class="btn"> book now </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./css/images/about4.jpg" alt="tourism place">
            </div>
            <div class="content">
                <h3>adventures and tour</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit!</p>
                <a href="book.php" class="btn"> book now </a>
            </div>
        </div>
    </div>

    <div class="load-more">
        <a href="package.php" class="btn"> load more </a>
    </div>

</section>


<!-- home packages section ends -->







<!-- footer section starts -->
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
            <h3>Extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> about us </a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
        </div>

        <div class="box">
            <h3>Contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"><i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"><i class="fas fa-envelope"></i> manu@gmail.com </a>
            <a href="#"><i class="fas fa-map"></i> colombo, SriLanka </a>
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a href="#"><i class="fab fa-facebook"></i> facebook </a>
            <a href="#"><i class="fab fa-twitter"></i> twitter </a>
            <a href="#"><i class="fab fa-instagram"></i> instagram </a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit">created by <span>manushi katiperachchi</span> |all rights reserved!</div>
</section>

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="./js/script.js"></script>

</body>
</html> 
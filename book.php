<?php include("book_form.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>home</title>

        <!--sw css link -->
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        
        <!-- css file link -->
        <link rel="stylesheet" href="css/home.css">

    </head>
<body>

<section class="header">

    <a href="home.php" class="logo">Goblin</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
        <a href="signup">login</a>
    </nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->
<div class="heading" style="background:url(images/header-img-3.jpg) no-repeat">
<h1>book Now</h1>
</div>



<!-- booking section starts -->

<section class="booking">

    <h1 class="heading-title">book your trip!</h1>

    <form action="book_form.php" method="post" class="book-form">

    <div class="flex">
        <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
        </div>
        <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
        </div>
        <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
        </div>
        <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
        </div>
        <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
        </div>
        <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
        </div>
        <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
        </div>
        <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
        </div>
    </div>

    <input type="submit" value="Submit" class="btn" name="send">
    
    </form>

</section>

<!-- booking section ends -->








<!-- footer -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick link</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i>about us</a>
            <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>term of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
            <a href="#"><i class="fas fa-envelope"></i> goblin@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> mehsana, gujarat - 380069</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>

    </div>
    <div class="cradit"> created by <span>GOBLIN TEAM  </span>   |  all rights reserved! </div>
    
</section>





<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- js file link -->
<script src="js/script.js"></script>
</body>
    </html>
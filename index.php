<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>VoyageLux Homestay Reservation Website</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">VoyageLux <span> by zen corp</span> <img src="./assets/images/logoVL2.png" alt="logo Image" class="img-logo"></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="vacations.php">Listings</a></li>
                            <li><a href="testimonials.php">Reviews</a></li>
                            <li><a href="about.php">About Us</a></a></li>
                            <!--<li><a href="blog.php">Blog</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active"  href="about.php">About Us</a>
                                    <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                                    <a class="dropdown-item" href="terms.php">Terms</a>
                                </div>
                            </li>-->
                            <li><a href="contact.php">Contact</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Enjoy the moment to the fullest during vacation</h6>
                <h2>A perfect <br><em>Homestay to relax with</em></h2>
                <!--<div class="main-button">
                    <a href="contact.php">Contact Us</a>
                </div>-->
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Featured <em>Homestay</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Providing you wide range of homestay to choose from.</p>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
            include 'db_connect.php';
            
            $sql = "SELECT * FROM Listing";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
                $listing_id = $row["ListingID"];
                echo "<div class='col-lg-4'>
                        <div class='trainer-item'>
                            <div class='image-thumb'>
                                <img src='' alt=''>
                            </div>
                            <div class='down-content'>
                                <span>
                                    RM " . $row["Price"]. ".00
                                </span>

                                <h4>" . $row["Title"]. "</h4>

                                <p>
                                    <i class='fa fa-map-marker'></i> " . $row["Location"]. "
                                </p>


                                <ul class='social-icons'>
                                    <li><a href='vacation-details.php?id=$listing_id'>+ View More</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>";
            }
            ?>
                    <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/rumah/rumah 1.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                RM 111.00 - RM 611.00
                            </span>

                            <h4>Rumah Singgah</h4>

                            <p>
                                <i class="fa fa-map-marker"></i> Machang, Kelantan
                            </p>

                            <ul class="social-icons">
                                <li><a href="vacation-details.php">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/rumah/product-5-720x480.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                RM 250.00 - RM 750.00
                            </span>

                            <h4>Perhentian Dream</h4>

                            <p>
                                <i class="fa fa-map-marker"></i> Perhentian Island, Terengganu
                            </p>

                            <ul class="social-icons">
                                <li><a href="vacation-details.php">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="main-button text-center">
                <a href="vacations.php">View Listings</a>
            </div>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    <section class="section section-bg" id="schedule" style="background-image: url(assets/images/about-fullscreen-1-1920x700.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2><em>About Us</em></h2>
                        <img src="assets\images\logoVL1.png" height="450" width="450" alt="">
                        <p>VoyageLux is a pioneering rental platform in Malaysia established by Zen Corp. We specialize in simplifying the rental process for both property owners and renters. Our online platform centralizes rental listings, streamlines the rental process, and enhances transparency and trust in the rental market.
                            <br><br>We aim to make Voyage Lux as an online marketplace and hospitality service platform specifically in Malaysia that allows people to rent homestays. The accommodations listed on our website; instead, it serves as a broker, connecting hosts , individuals who want to rent out their properties, with guests, travelers seeking accommodation.
                        </p>
                    </div>
                </div>
            </div>
            <!--<div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore deleniti voluptas enim! Provident consectetur id earum ducimus facilis, aspernatur hic, alias, harum rerum velit voluptas, voluptate enim! Eos, sunt, quidem.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto nulla quo cum officia laboriosam. Amet tempore, aliquid quia eius commodi, doloremque omnis delectus laudantium dolor reiciendis non nulla! Doloremque maxime quo eum in culpa mollitia similique eius doloribus voluptatem facilis! Voluptatibus, eligendi, illum. Distinctio, non!</p>
                    </div>
                </div>
            </div>-->
        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <!--<section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our <em>Blog</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'>Lorem ipsum dolor sit amet, consectetur adipisicing.</a></li>
                  <li><a href='#tabs-2'>Aspernatur excepturi magni, placeat rerum nobis magnam libero! Soluta.</a></li>
                  <li><a href='#tabs-3'>Sunt hic recusandae vitae explicabo quidem laudantium corrupti non adipisci nihil.</a></li>
                  <div class="main-rounded-button"><a href="blog.php">Read More</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="assets/images/blog-image-1-940x460.jpg" alt="">
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>

                    <p><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i>  15 comments</p>

                    <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                    <div class="main-button">
                        <a href="blog-details.php">Continue Reading</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="assets/images/blog-image-2-940x460.jpg" alt="">
                    <h4>Aspernatur excepturi magni, placeat rerum nobis magnam libero! Soluta.</h4>
                    <p><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i>  15 comments</p>
                    <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <div class="main-button">
                        <a href="blog-details.php">Continue Reading</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="assets/images/blog-image-3-940x460.jpg" alt="">
                    <h4>Sunt hic recusandae vitae explicabo quidem laudantium corrupti non adipisci nihil.</h4>
                    <p><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i>  15 comments</p>
                    <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                    <div class="main-button">
                        <a href="blog-details.php">Continue Reading</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>-->
    <!-- ***** Blog End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Send us a <em>message</em></h2>
                        <p>Our 24/7 line always available for you to help about your reservation.</p>
                        <div class="main-button">
                            <a href="contact.php">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read Other Users' <em>Reviews</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>Help you to decide whether to make reservations</p>
                    </div>
                </div>
                <div class="col-lg-6 | offset-pos">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/gmbr kimi.jpg" height="90" width="87" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Mi J</h4>
                                <p>"A great choice to run away from hectic life."</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/gmbr pokka.jpg" height="90" width="87" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>Pokka</h4>
                                <p>"Swimming for life. That's for sure."</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 | offset-pos">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/qeri.jpg" height="90" width="87" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>al-Qori</h4>
                                <p><em>"Inner peace is when you don't stress"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/Qema.jpg" height="90" width="87" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Qemal</h4>
                                <p>"Smash through life. If not I dont know la."</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <br>

            <div class="main-button text-center">
                <a href="testimonials.php">Read More</a>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2024 Zen Corporation</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>
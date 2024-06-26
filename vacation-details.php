<?php
include 'db_connect.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if listing_id is set in the URL
if (isset($_GET["id"])) {
  $listingID = $_GET["id"];

  // Prepare and execute the SQL statement to fetch the listing details
  $stmt = $conn->prepare("SELECT * FROM Listing WHERE ListingID = ?");
  $stmt->bind_param("s", $listingID);
  $stmt->execute();
  $result = $stmt->get_result();

  // Check if a result is returned
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $listing_title = $row["Title"];
    $description = $row["Description"];
    $price = $row["Price"];
  } else {
    $listing_title = "Listing not found";
    $description = "description not found";
    $price = "price not found";
  }

  $stmt->close();
} else {
  $listing_title = "No listing ID provided";
}

$conn->close();
?>

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
                        <a href="index.php" class="logo">VOYAGELUX<em> BY ZEN CORP</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                         <li><a href="index.php">Home</a></li>
                         <li><a href="vacations.php">Listings</a></li>
                         <li><a href="testimonials.php">Reviews</a></li>
                         <li><a href="about.php">About Us</a></a></li>
                         <li><a href="contact.php">Contact</a></li> 
                         <!--<li><a href="blog.php">Blog</a></li>
                         <li class="dropdown">
                             <a class="dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                           
                             <div class="dropdown-menu">
                                 <a class="dropdown-item active"  href="about.php">About Us</a>
                                 <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                                 <a class="dropdown-item" href="terms.php">Terms</a>
                             </div>
                         </li>-->       
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

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2><?php echo $listing_title; ?></h2>
                        <br>
                        <div class="main-button">
                          <a href="#" data-toggle="modal" data-target="#exampleModal">Enquiry</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="assets/images/rumah/product-1-720x480.jpg" height="450" width="450" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/rumah/dlm rumah 1.jpg" height="450" width="450" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/rumah/kolam 1.jpg" height="450" width="450" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            
            <br>
            <br>

            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><i class="fa fa-star"></i> Accommodities</a></li>
                  <li><a href='#tabs-2'><i class="fa fa-gift"></i> Description</a></li>
                  <li><a href='#tabs-3'><i class="fa fa-plus-circle"></i> Availability &amp; Prices</a></li>
                  <li><a href='#tabs-4'><i class="fa fa-info-circle"></i> Reservation Info</a></li>
                  <li><a href='#tabs-5'><i class="fa fa-phone"></i> Contact Details</a></li>
                  <li><a href='#tabs-6'><i class="fa fa-comments"></i> Reviews</a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content' style="width: 100%;">
                  <article id='tabs-1'>
                    <h4>Vacation Extras</h4>

                    <div class="row">
                       <div class="col-sm-6">
                              <p>Air condition</p>
                         </div>
                         <div class="col-sm-6">
                              <p>Pool</p>
                         </div>
                         <div class="col-sm-6">
                              <p>Fully equipped kitchen</p>
                         </div>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <h4>Vacation Description</h4>
                    
                    <p><?php echo $description ?></p> 
                   </article>
                  <article id='tabs-3'>
                    <h4>Availability &amp; Prices</h4>

                    <div class="table-responsive">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
                         <thead>
                              <tr>
                                   <th>Package</th>
                                   <th>From</th>
                                   <th>To</th>
                                   <th>Price</th>
                              </tr>
                         </thead>
                         
                         <tbody>
                              <tr>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td>RM<?php echo $price ?> per night</td>
                              </tr>
                         </tbody>
                      </table>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <h4>Reservation Info</h4>

                    <ul class="list-group list-group-no-border">
                      <li class="list-group-item" style="margin:0 0 -1px">
                         <div class="row">
                              <div class="col-md-2 col-sm-3">
                                   <p class="pjVpProductPolicyTitle">
                                        <strong>Check-in</strong>
                                   </p>
                              </div>
                              <div class="col-md-10 col-sm-9">
                                   <p>
                                        Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum.
                                   </p>
                              </div>
                         </div>
                      </li>

                      <li class="list-group-item" style="margin:0 0 -1px">
                           <div class="row">
                                <div class="col-md-2 col-sm-3">
                                     <p>
                                          <strong>Check-out</strong>
                                     </p>
                                </div>

                                <div class="col-md-10 col-sm-9">
                                     <p>
                                          Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum.
                                     </p>
                                </div>
                           </div>
                      </li>

                      <li class="list-group-item" style="margin:0 0 -1px">
                           <div class="row">
                                <div class="col-md-2 col-sm-3">
                                     <p>
                                          <strong>Pets</strong>
                                     </p>
                                </div>
                                <div class="col-md-10 col-sm-9">
                                     <p>
                                          Not allowed
                                     </p>
                                </div>
                           </div>
                      </li>

                      <li class="list-group-item" style="margin:0 0 -1px">
                           <div class="row">
                                <div class="col-md-2 col-sm-3">
                                     <p>
                                          <strong>Policies</strong>
                                     </p>
                                </div>
                                <div class="col-md-10 col-sm-9">
                                     <div>
                                          <p>
                                               Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                                                Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                                          </p>
                                     </div>
                                </div>
                           </div>
                      </li>
                      
                      <li class="list-group-item" style="margin:0 0 -1px">
                           <div class="row">
                                <div class="col-md-2 col-sm-3">
                                     <p>
                                          <strong>Fees</strong>
                                     </p>
                                </div>

                                <div class="col-md-10 col-sm-9">
                                     <div>
                                          <p>
                                               Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                                                Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                                          </p>
                                     </div>
                                </div>
                           </div>
                      </li>
                    </ul>
                  </article>
                  <article id='tabs-5'>
                    <h4>Contact Details</h4>

                    <div class="row">   
                        <div class="col-sm-6">
                            <label>Name</label>

                            <p>John Smith</p>
                        </div>
                        <div class="col-sm-6">
                            <label>Phone</label>

                            <p>123-456-789 </p>
                        </div>
                        <div class="col-sm-6">
                            <label>Mobile phone</label>
                            <p>456789123 </p>
                        </div>
                        <div class="col-sm-6">
                            <label>Email</label>
                            <p><a href="#">john@carsales.com</a></p>
                        </div>
                    </div>

                    <img src="assets/images/map.jpg" class="img-fluid" alt="">
                  </article>
                </section>
                <div class="tab-pane" id="tabs-6" role="tabpanel">
                    <h4>Reviews</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="features-items">
                                <li class="feature-item">
                                    <div class="left-icon">
                                        <img src="assets/images/gmbr kimi.jpg" height="90" width="87" alt="First One">
                                    </div>
                                    <div class="right-content">
                                        <h4>Mi J</h4>
                                        <p>"A great option to run away from hectic life."</p>
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
                        <div class="col-lg-6">
                            <ul class="features-items">
                                <li class="feature-item">
                                    <div class="left-icon">
                                        <img src="assets/images/qeri.jpg" height="90" width="87" alt="third one">
                                    </div>
                                    <div class="right-content">
                                        <h4>al-Qori</h4>
                                        <p><em>"Inner peace is when you don't stress"</em></p>
                                    </div>
                                </li>
                                <li class="feature-item">
                                    <div class="left-icon">
                                        <img src="assets/images/Qema.jpg" height="90" width="87" alt="fourth one">
                                    </div>
                                    <div class="right-content">
                                        <h4>Qemal</h4>
                                        <p>"Smash through life. If not I dont know la."</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="main-button">
                                <br>
                                <a href="#" data-toggle="modal" data-target="#exampleModal">Add Review</a>
                            </div>
                        </div>
                    </div>
                </div>
                
</section>
    <!-- ***** Fleet Ends ***** -->
    
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enquiry</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-us">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter full name" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <div class="row">
                             <div class="col-md-6">
                                <fieldset>
                                  <input type="text" class="form-control" placeholder="From date" required="">
                                </fieldset>
                             </div>

                             <div class="col-md-6">
                                <fieldset>
                                  <input type="text" class="form-control" placeholder="To date" required="">
                                </fieldset>
                             </div>
                          </div>
                       </div>
                  </div>
              </form>
           </div>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Send Request</button>
          </div>
        </div>
      </div>
    </div>

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
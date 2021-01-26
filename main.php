<?php
$db= new mysqli('localhost','root','');
  mysqli_select_db( $db, 'studywars' );
  session_start();
        if(!isset($_SESSION['userId'])){

       header("Location: login.php");  // redirect to login page or index page if email and username is not set in session
  } 
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
  $product= $_POST['product_name']; 
   
  $sql= "select * from product where `ProName` like '$product%'";
  //echo $sql;
    $result= $db->query($sql);
    $numrows = $result->num_rows;
    
  if($numrows){
        $row = $result->fetch_row();  
  }else{
       $message = "Record not found";
       echo "<script type='text/javascript'>alert('$message')";
    }
}
$db->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>STUDYWARS BAKERY</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><a href="main.php">StudyWars Bakery</a></h1>
      <a href="main.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="main.php">Home</a></li>
          <li><a href="#about">Product</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Cart</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#pricing">FAQ</a></li>
          <li class="drop-down"><a href="">More</a>
            <ul>
              <li><a href="#">About Us</a></li>
              <li class="drop-down"><a href="#">Team Name</a>
                <ul>
                  <li><a href="Assignment-67506.html">PRISSILLA TASSY</a></li>
                  <li><a href="Rasilawati_e-Portfolio.html">RASILAWATI</a></li>
                  <li><a href="FARHANAH AL-HANAN e portfolio.html">FARHANAH AL-HANAN</a></li>
                  <li><a href="NURPUTRINAJIHAH_ePortfolio.html">NUR PUTRI NAJIHAH</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Welcome to Baker</h1>
      <h2>We are team of talanted designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/Bakery.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>About StudyWars Bakery</h3>
            <p>
              Originated from Malaysia, StudyWars Bakery is one of the most famous home grown bakery chain with outlets in Malaysia. We’re passionate bakers with a commitment to our community and we plan on continuing this tradition for years to come. We welcome you to come on in and have a bite. 
            </p>

            <h5>"Once You try, You will Definitely wanted more"</h5>

            <div class="row">
              <div class="col-md-6">
                <i class="bx bx-receipt"></i>
                <h4>Product</h4>
                <p>All of StudyWars Bakery Cookies and cake product was originally homemade</p>
              </div>
              <div class="col-md-6">
                <i class="bx bx-cube-alt"></i>
                <h4>StudyWars Bakery Outlet</h4>
                <p>We have 2 oulet which is in Kota Samarahan and Kuching, Sarawak</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">432</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">25</span>
            <p>Product</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">40</span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>StudyWars Bakery have provide many services that will facilitate consumer.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="">Designing & Baking</a></h4>
              <p>Our bakery provide designing for cookies and cake. Consumer can request any design they want and we will follow their request.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="">Cash on Delivery</a></h4>
              <p>Because of Pandemic Covid-19 outbreak, Our Bakery provide COD Services. Consumer can contact us or order through our website and we will prepare their order. Then, our runner will send the order. </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="">Trait Delivery</a></h4>
              <p>Our Bakery also welcome any strore that wanted to selling our product. We will delivered the product for them daily. Our Bakery will delivered fresh product that baked everyday.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <i class="bx bx-layer"></i>
              </div>
              <h4><a href="">Cookies Gift Box</a></h4>
              <p>If anyone wanted to do an event, Our Bakery provide Cookies Gift Box. We welcome anyone that wanted to use our cookies product as gift for their events. We will packing and prepared the gift box well.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <i class="bx bx-slideshow"></i>
              </div>
              <h4><a href="">Cookies Shippping</a></h4>
              <p>If you are live far away from our store, do not worry. we proviede cookies shipping services. You can order on our website and we will prepare the order and ship it to you. We will make sure you will get good cookies quality. We will make sure to wrap it well before ship it.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <i class="bx bx-arch"></i>
              </div>
              <h4><a href="">Divera Don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

     <!-- ======= Testimonials Section ======= -->
     <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Here is a few feedback from StudyWars Bakery Customer.</p>
        </div>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              "I fall in love with your cheese cake. Thanks for the quality ingredients and tastefully serving, wish your brand and passion could inspires more cake lovers!""
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              "Creative, passion and create happiness and love… say cakes is the 1st choice for me whenever I think of customize cakes and birthday cakes"
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              "Our wedding cookies were elegant and beautiful! …not to mention the best tasting cookies I’ve ever had! Michael and I thank you again for the fabulous cookies…they were a hit!"
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              “No matter the event, SWB can create the perfect cookie to match. And when I say “perfect,” I mean it. StudyWars Bakery works of art aren’t simply beautiful, they are absolutely delicious!”
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              "Very Creative in the cake presentation and taste good too! Well done!"
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

            <!-- ======= Team Section ======= -->
            <section id="team" class="team section-bg">
              <div class="container">
        
                <div class="section-title">
                  <h2>Team</h2>
                  <p>Introduce To You our Team member of StudyWars Bakery. Let's see this great people that Contribute to the success of StudyWars Bakery.</p>
                </div>
        
                <div class="row">
        
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                      <div class="member-img">
                        <img src="assets/img/team/Rasila.png" class="img-fluid" alt="Rasila.png">
                        <div class="social">
                          <a href="https://twitter.com/Rasilawati1998?s=09"><i class="icofont-twitter"></i></a>
                          <a href="https://www.facebook.com/rasilawati.bintikassim"><i class="icofont-facebook"></i></a>
                          <a href="https://instagram.com/rasilawati98?igshid=poqlbj2w7sqt"><i class="icofont-instagram"></i></a>
                        </div>
                      </div>
                      <div class="member-info">
                        <h4>Rasilawati binti Kassim</h4>
                        <span>Chief Executive Officer</span>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                      <div class="member-img">
                        <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        <div class="social">
                          <a href=""><i class="icofont-twitter"></i></a>
                          <a href=""><i class="icofont-facebook"></i></a>
                          <a href=""><i class="icofont-instagram"></i></a>
                          <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                      </div>
                      <div class="member-info">
                        <h4>Prissilla Tassy anak Binit</h4>
                        <span>Product Manager</span>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                      <div class="member-img">
                        <img src="assets/img/team/Farhanah.jpeg" class="img-fluid" alt="Farhanah.jpeg">
                        <div class="social">
                          <a href="https://www.facebook.com/profile.php?id=100004128605647"><i class="icofont-facebook"></i></a>
                          <a href="https://www.instagram.com/alhanan_farhanah/"><i class="icofont-instagram"></i></a>
                        </div>
                      </div>
                      <div class="member-info">
                        <h4>Farhanah Al-Hanan binti Faisal</h4>
                        <span>CTO</span>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                      <div class="member-img">
                        <img src="assets/img/team/Najihah.jpeg" class="img-fluid" alt="Najihah.jpeg">
                        <div class="social">
                          <a href="https://www.instagram.com/putrinajihah/"><i class="icofont-instagram"></i></a>
                        </div>
                      </div>
                      <div class="member-info">
                        <h4>Nur Putri Najihan binti Rahisam</h4>
                        <span>COO</span>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                      <div class="member-img">
                        <img src="assets/img/team/Sabarina.jpeg" class="img-fluid" alt="Sabarina.jpeg">
                        <div class="social">
                          <a href="https://www.facebook.com/airinrose09"><i class="icofont-facebook"></i></a>
                          <a href="https://www.instagram.com/sbrnaj_/"><i class="icofont-instagram"></i></a>
                        </div>
                      </div>
                      <div class="member-info">
                        <h4>Sabarina binti Aziz Ja'apar</h4>
                        <span>Accountant</span>
                      </div>
                    </div>
                  </div>
        
                </div>
        
              </div>
            </section><!-- End Team Section -->
        

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

     <!-- ======= Frequently Asked Questions Section ======= -->
     <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        <p>If you can't find the answer to your question below, please feel free to contact us directly! Thank you!</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">What makes SWB cookies and cake so darn special? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Using fresh ingredients, every cookie is made with love and our cookies and cake taste as good as they look (or so we're told!). Each is painted by hand with great care, and before the next is added, each sheet of icing dries. It's a time-sensitive operation and a love labour that leads to awesome cookies and cake! To make each cookie and cake look and taste perfect for you, we take our time and pay attention to the specifics!
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Are you able to create a custom cookie and cake order? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Just for you, we would love to make a customized cookie and cake order! We require you to give us at least 3 weeks notice for custom orders, but months in advance, you can get on our baking schedule - the more notice, the better! For your wedding, birthday, shower, or other special event, we will do our best to make a cookie that is beautiful. Payment is due at the time the order date is reserved in order to add your order to the baking schedule.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">How many cookies come in a cookie gift box? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  The number of cookies in each GIFT box varies. Each gift box is photographed to show the actual contents, and we also include a detailed product description.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">What is the minimum order on custom and cookie favor orders? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  Our minimum order amount is $200 and at least 2 dozen (24 cookies). We ask that you limit designs to 1 design per dozen ordered.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">How do I place an order? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                  We recommend checking out our shop for available things that you can buy directly from our website if you are looking for a holiday/seasonal order. Please email us on 014-5953242 or studywarsbakery@gmail.com for custom orders, or head over to the contact page and request a form. Please make sure to include the following details when inquiring: name, address, email address, phone number, desired items and quantities, and if an invoice should be provided. Please do not include any payment information in your email or message! Once your order is confirmed, we will work out payment details. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-6" class="collapsed">How much is shipping? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-6" class="collapse" data-parent=".faq-list">
                <p>
                  Items ordered in the store are PICK UP ONLY. To have your order shipped, please contact us. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="600">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-7" class="collapsed">How do you ship your cookies without them breaking? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-7" class="collapse" data-parent=".faq-list">
                <p>
                  All cookies are individually packaged and put in a bakery box, nestled into a bed of crinkle paper and bubble wrap. Then the baking package is in a mailing box cushioned with wrapping materials. We put as much work into the cookies' wrapping as we do the baking! A cookie can split or crack quite rarely (but fortunately, it'll still taste great!).
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="700">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-8" class="collapsed">Can you guarantee an exact arrival date? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-8" class="collapse" data-parent=".faq-list">
                <p>
                  Unfortunately, we cannot guarantee an exact arrival date. However, using the guidelines above, we can help you estimate a target arrival date. If you would like Overnight/Express/Guaranteed shipping, please contact us for a quote.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="800">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-9" class="collapsed">How do I pay for my order? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-9" class="collapse" data-parent=".faq-list">
                <p>
                  Payment is accepted via PayPal as well as cash or check. Checks can be made out to Jamie Wadowsky. If you require an invoice, please note so in your order details. Payment is due at the time of ordering in order to be added to our baking schedule!
                </p>
              </div>
            </li>



          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Contact</h2>
      <p>We love to hear from you. Whether you have question about our service, pricing, or anything else, our team are ready to answer all your question.</p>
    </div>

    <div class="row">

      <div class="col-lg-6">

        <div class="row">
          <div class="col-md-12">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Desa Ilmu, 94300 Kota Samarahan, Sarawak</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>studywarsbakery@gmail.com<br>Admin_SWB@gmail.com</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+60 145953242<br>+60 6678 254445 41</p>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been Succesfully sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>StudyWars Bakery</h3>
        <p>
          Desa Ilmu, <br>
          94300 Kota Samarahan<br>
          Sarawak <br><br>
          <strong>Phone:</strong> +60 145953242<br>
          <strong>Email:</strong> studywarsbakery@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#Home">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#About Us">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#Services">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#Terms of Services">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#Privacy Policy">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#Designing & Baking">Designing & Baking</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#Cash on Delivery">Cash on Delivery</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#Trait Delivery">Trait Delivery</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#Cookies Gift Box">Cookies Gift Box</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#Cookies Shipping">Cookies Shipping</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join Our Newsletter</h4>
        <p>Subcribe to our newsletter to receive latest news and our offer every week. No spam</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="mr-md-auto text-center text-md-left">
    <div class="copyright">
      &copy; Copyright <strong><span>StudyWars Bakery</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/ -->
      Designed by <a href="https://bootstrapmade.com/">StudyWars Bakery</a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="https://www.facebook.com/rasilawati.bintikassim" class="twitter"><i class="bx bxl-facebook"></i></a>
    <a href="https://twitter.com/Rasilawati1998?s=09" class="facebook"><i class="bx bxl-twitter"></i></a>
    <a href="https://instagram.com/rasilawati98?igshid=poqlbj2w7sqt" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
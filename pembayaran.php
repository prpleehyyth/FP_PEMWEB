<?php 
  require_once('auth.php');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>Tale SEO Agency - FAQ Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-tale-seo-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 582 Tale SEO Agency

https://templatemo.com/tm-582-tale-seo-agency

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  

  <!-- ***** Pre-Header Area Start ***** -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-9">
          <div class="left-info">
            <ul>
              <li><a href="https://wa.me/6289631317064" target="_blank"><i class="fa fa-phone"></i>+62 89631317064</a></li>
              <li><a href="https://mailto:22082010098@student.upnjatim.ac.id" target="_blank"><i class="fa fa-envelope"></i>support@siwarsa.com</a></li>
              <li><a href="https://maps.app.goo.gl/4Vzup13GjnDdAGG57" target="_blank"><i class="fa fa-map-marker"></i>SIWARSA Headquarter</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-3">
          <div class="social-icons">
            <ul>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Pre-Header Area End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo_onlyy.png" alt="" style="max-width: 150px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                      <li class="scroll-to-section"><a href="#services">Services</a></li>
                      <li class="scroll-to-section"><a href="#projects">Projects</a></li>
                      <li class="has-sub">
                          <a href="javascript:void(0)">Bantuan</a>
                          <ul class="sub-menu">
                              <li><a href="#contact">Komplain</a></li>
                              <li><a href="faqs.html">FAQs  </a></li>
                          </ul>
                      </li>
                      <li class="scroll-to-section"><a href="about.php">Submission</a></li>
                      <?php if(!auth()) : ?>
                      <li class="scroll-to-section"><a href="login.php">Login</a></li><!-- ini awalnya #contact -->
                      <?php else: ?>
                      <li class="has-sub sub-username">
                        <a href="javascript:void(0)" ><?= $_SESSION['username'] ?></a>
                        <ul class ="sub-menu"> 
                          <li><a href="logout.php">logout</a></li>
                        </ul>
                      </li>
                      <?php endif; ?>
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

  <div class="most-asked section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2><em>Metode Pembayaran</em></h2>
            <div class="line-dec"></div>
            <p>Pilih salah satu metode pembayaran</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
              <div class="accordion-head">
                  <span>Transfer Bank</span>
                  <span class="icon">
                      <i class="icon fa fa-chevron-right"></i>
                  </span>
              </div>
              <div class="accordion-body">
                  <div class="content">
                      <p>Tale is the best SEO agency website template using Bootstrap v5.2.2 CSS for your company. It is a free download provided by TemplateMo. There are 3 HTML pages, <a href="index.html">Home</a>, <a href="about.html">About</a>, and <a href="faqs.html">FAQ</a>.</p>
                  </div>
              </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>E-Wallet</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>You are free to use this template for any purpose. You are not allowed to redistribute the downloadable ZIP file of Tale SEO Template on any other template website. Please contact us. Thank you.
                    <br><br>
                    Semiotics blog cray letterpress lo-fi vexillologist before they sold out swag YOLO schlitz. Coloring book roof party gentrify brunch.</p>
                </div>
            </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>Virtual Account</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>Semiotics blog cray letterpress lo-fi vexillologist before they sold out swag YOLO schlitz. Coloring book roof party gentrify brunch.<br><br>
                    Fingerstache cronut taxidermy, echo park quinoa tumblr activated charcoal before they sold out.</p>
                </div>
            </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>Dolores Accordion HTML5</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                  <p>Pickled succulents bitters  belly direct trade, shaman iceland raw denim kombucha cray offal. Food truck swag hell of tumblr poutine tilde live-edge shorts microdosing fixie succulents, viral everyday carry tattooed.</p>
                </div>
            </div>
          </article>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="get-free-quote">
          <form id="free-quote" method="submit" role="search" action="#">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h2>Cek<em> Data Ajuan Anda</em> Terlebih Dahulu</h2>
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="website" name="website" id="website" placeholder="Website URL" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="phone-number" name="phone-number" id="phone-number" placeholder="Phone Number" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="full-name" name="full-name" id="full-name" placeholder="Full Name" autocomplete="on" >
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
  </div>

  <div class="cta section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h4>Are You Ready To Work &amp; Develop With Us ?<br>Don't Hesitate &amp; Contact Us !</h4>
        </div>
        <div class="col-lg-4">
          <div class="main-button">
            <a href="#">Contact Us Now!</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2036 <a href="#">Tale SEO Agency</a>. All rights reserved. 
        
        <br>Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a></p>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>
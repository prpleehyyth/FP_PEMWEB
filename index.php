
<?php 
  require_once('auth.php');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>SIWARSA : Sistem Informasi Sewa Ruko Desa</title>

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

 <!-- preloader dihapus (loading screen)-->

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
                        <img src="assets/images/logo_only.png" alt="" style="max-width: 112px;">
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

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="caption header-text">
            <h6>SIWARSA : Sistem Informasi Sewa Ruko Desa</h6>
            <div class="line-dec"></div>
            <h4>Sewa<em> Ruko Bisnis </em> dengan <span>SIWARSA</span></h4>
            <p>SIWARSA adalah adalah sebuah website yang memfasilitasi proses penyewaan ruko  antara pemerintah desa dan masyarakat, serta membantu pemerintah desa dalam mengatur proses administrasi dan operasional penyewaan desa untuk BUMDES. </p>
            <div class="main-button scroll-to-section"><a href="about.php">Sewa Ruko Kami</a></div>
            <span>atau</span>
            <div class="second-button"><a href="faqs.html">Lihat FAQs Kami</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h2>Kami Memiliki Banyak <em>Jenis</em> &amp;
                  <span>Ukuran</span> Ruko untuk Bisnis Anda</h2>
                  <div class="line-dec"></div>
                  <p>Pilih Ruko yang paling cocok dengan anda.</p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-01.jpg" alt="discover SEO" class="templatemo-feature">
                </div>
                <h4>Ruko 1 - Mini Resto</h4>
                <p>Cocok untuk usaha F&B dengan dapur</p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-02.jpg" alt="data analysis" class="templatemo-feature">
                </div>
                <h4>Ruko 2 - Mini Resto</h4>
                <p>Cocok untuk usaha F&B dengan dapur</p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-03.jpg" alt="precise data" class="templatemo-feature">
                </div>
                <h4>Ruko 3 - Mini Cafe</h4>
                <p>Cocok untuk Cafe dengan counter untuk mesin kopi</p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-04.jpg" alt="SEO marketing" class="templatemo-feature">
                </div>
                <h4>Ruko 4 - Mini Cafe</h4>
                <p>Cocok untuk Cafe dengan counter untuk mesin kopi</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="projects section" id="projects">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Usaha yang <em>Menyewa</em> &amp; <span>Projects</span></h2> <!-- belum nemu kata katanya 
            intinya sih buat nunjukkin usaha usaha yang udah pernah nyewa ruko. Atau nanti dibalik sama services section.-->
            <div class="line-dec"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod.</p>
          </div>
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-features owl-carousel">
            <div class="item">
              <img src="assets/images/projects-01.jpg" alt="">
              <div class="down-content">
                <h4>Digital Agency HTML Templates</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-02.jpg" alt="">
              <div class="down-content">
                <h4>Admin Dashboard CSS Templates</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-03.jpg" alt="">
              <div class="down-content">
                <h4>Best Responsive Website Layouts</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-04.jpg" alt="">
              <div class="down-content">
                <h4>HTML CSS Layouts for your websites</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-02.jpg" alt="">
              <div class="down-content">
                <h4>Bootstrap 5 Themes for Free</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-03.jpg" alt="">
              <div class="down-content">
                <h4>Mobile Friendly Website Layouts</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="infos section" id="infos">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-content">
            <div class="row">
              <div class="col-lg-6">
                <div class="left-image">
                  <img src="assets/images/left-infos.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="section-heading">
                  <h2>More <em>About Us</em> &amp; What <span>We Offer</span></h2>
                  <div class="line-dec"></div>
                  <p>You are free to use this template for any purpose. You are not allowed to redistribute the downloadable ZIP file of Tale SEO Template on any other template website. Please contact us. Thank you.</p>
                </div>
                <div class="skills">
                  <div class="skill-slide marketing">
                    <div class="fill"></div>
                    <h6>Marketing</h6>
                    <span>90%</span>
                  </div>
                  <div class="skill-slide digital">
                    <div class="fill"></div>
                    <h6>Ditigal Media</h6>
                    <span>80%</span>
                  </div>
                  <div class="skill-slide media">
                    <div class="fill"></div>
                    <h6>Social Media Managing</h6>
                    <span>95%</span>
                  </div>
                </div>
                <p class="more-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod tempor incididunt ut labore et dolore dolor dolor sit amet, consectetur adipiscing elit, sed doers eiusmod.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-us-content">
            <div class="row">
              <div class="col-lg-12">
                <form id="contact-form" action="" method="post">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="section-heading">
                        <h2><em>Isi data diri</em> &amp; <span>Sewa Ruko Anda</span></h2>
                      </div>
                    </div>
                    
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Nama Lengkap" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="surname" name="surname" id="surname" placeholder="Nomor Telepon" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Alamat E-mail" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Nama Usaha" autocomplete="on" >
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="message" id="message" placeholder="Alamat Tempat Tinggal"></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
                      </fieldset>
                    </div>
                  
                  </div>
                </form>
                <div class="more-info">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-phone"></i>
                        <h4><a href="#">010-020-0340</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-envelope"></i>
                        <h4><a href="#">info@company.com</a></h4>
                        <h4><a href="#">hello@company.com</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-map-marker"></i>
                        <h4><a href="#">Sunny Isles Beach, FL 33160, United States</a></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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

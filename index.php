
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
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
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
                              <li><a href="History.php">History</a></li>
                              <li><a href="pembayaran.php">Pembayaran</a></li>
                          </ul>
                      </li>
                      <li class="scroll-to-section"><a href="about.php">Pengajuan</a></li>
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
                <a href="ruko1.php"><h4>Ruko 01</h4></a>
                <p>Rumah Toko (Ruko) satu lantai di lokasi strategis pusat bisnis. Cocok untuk berbagai usaha dengan fasilitas lengkap.</p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-02.jpg" alt="data analysis" class="templatemo-feature">
                </div>
                <a href="ruko2.php"><h4>Ruko 02</h4></a>
                <p>Rumah Toko (Ruko) satu lantai di lokasi strategis pusat bisnis. Cocok untuk berbagai usaha dengan fasilitas lengkap.</p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-03.jpg" alt="precise data" class="templatemo-feature">
                </div>
                <a href="ruko3.php"><h4>Ruko 03</h4></a>
                <p>Rumah Toko (Ruko) satu lantai di lokasi strategis pusat bisnis. Cocok untuk berbagai usaha dengan fasilitas lengkap.</p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-04.jpg" alt="SEO marketing" class="templatemo-feature">
                </div>
                <a href="ruko4.php"><h4>Ruko 04</h4></a>
                <p>Rumah Toko (Ruko) satu lantai di lokasi strategis pusat bisnis. Cocok untuk berbagai usaha dengan fasilitas lengkap.</p>
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
              <img src="assets/images/ruko1.png" alt="">
              <div class="down-content">
                <h4>Toko Sembako Anugerah</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/ruko2.png" alt="">
              <div class="down-content">
                <h4>Warung Serba Ada Pak Fadil</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/ruko3.png" alt="">
              <div class="down-content">
                <h4>Warung Sumber Berkah</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/ruko4.png" alt="">
              <div class="down-content">
                <h4>Warung Kopi Mas Satrio</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/ruko5.png" alt="">
              <div class="down-content">
                <h4>Toko Kebutuhan Bu Rina</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/ruko4.png" alt="">
              <div class="down-content">
                <h4>Warung Kopi Pak Saiful</h4>
                <a href="#"><i class="fa fa-link"></i></a>
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
        <p>Copyright © 2036 <a href="#">SIWARSA : Sistem Informasi Sewa Ruko Desa</a>. All rights reserved. 
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

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
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
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
              <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="index.php">Services</a></li>
              <li class="scroll-to-section"><a href="index.php">Projects</a></li>
              <li class="has-sub">
                <a href="javascript:void(0)">Bantuan</a>
                <ul class="sub-menu">
                  <li><a href="History.php">History</a></li>
                  <li><a href="pembayaran.php">Pembayaran</a></li>
                </ul>
              </li>
              <li class="scroll-to-section"><a href="about.php">Pengajuan</a></li>
              <?php if (!auth()) : ?>
                <li class="scroll-to-section"><a href="login.php">Login</a></li><!-- ini awalnya #contact -->
              <?php else : ?>
                <li class="has-sub sub-username">
                  <a href="javascript:void(0)"><?= $_SESSION['username'] ?></a>
                  <ul class="sub-menu">
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
                  <p>Pembayaran melalui transfer bank adalah opsi yang disediakan untuk kenyamanan Anda. Anda dapat mentransfer pembayaran ke rekening bank yang disediakan setelah mengajukan pesanan. Pastikan untuk mencantumkan nomor pesanan Anda sebagai referensi dalam detail transfer Anda untuk memperlancar proses verifikasi dan pengolahan pesanan Anda.Berikut adalah nomor rekening yang dapat digunakan sebagai tujuan transfer </p>
                  <p> MANDIRI : 888888888, BNI :99999999</p>
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
                  <p>Pembayaran melalui e-wallet adalah cara yang cepat dan efisien untuk menyelesaikan pembelian Anda. Anda dapat melakukan pembayaran dengan mudah melalui e-wallet pilihan Anda setelah mengajukan pesanan. Pastikan untuk memasukkan detail pesanan Anda sebagai referensi untuk memudahkan verifikasi dan pengolahan pesanan Anda.
                    <br><br>
                    Gopay : 0888888xxxx.
                  </p>
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
                  <p>Pembayaran melalui e-wallet adalah cara yang cepat dan efisien untuk menyelesaikan pembelian Anda. Anda dapat melakukan pembayaran dengan mudah melalui e-wallet pilihan Anda setelah mengajukan pesanan. Pastikan untuk memasukkan detail pesanan Anda sebagai referensi untuk memudahkan verifikasi dan pengolahan pesanan Anda.</p>
                  <p>VA BANK ABC : 0763643XXXXX</p>
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
                    <input type="full-name" name="full-name" id="full-name" placeholder="Full Name" autocomplete="on">
                  </fieldset>
                </div>
              </div>
            </form>
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
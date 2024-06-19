<?php
require_once ('auth.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

  <title>SIWARSA : Sistem Informasi Sewa Ruko Desa</title>

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

  <!-- ***** Preloader End ***** -->

  <!-- ***** Pre-Header Area Start ***** -->
  <div class="pre-header" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-9">
          <div class="left-info">
            <ul>
              <li><a href="https://wa.me/6289631317064" target="_blank"><i class="fa fa-phone"></i>+62 89631317064</a>
              </li>
              <li><a href="https://mailto:22082010098@student.upnjatim.ac.id" target="_blank"><i
                    class="fa fa-envelope"></i>support@siwarsa.com</a></li>
              <li><a href="https://maps.app.goo.gl/4Vzup13GjnDdAGG57" target="_blank"><i
                    class="fa fa-map-marker"></i>SIWARSA Headquarter</a></li>
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
              <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#projects">Projects</a></li>
              <li class="has-sub">
                <a href="javascript:void(0)">Pages</a>
                <ul class="sub-menu">
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="faqs.html">FAQs</a></li>
                </ul>
              </li>
              <li class="scroll-to-section"><a href="#contact">Submission</a></li>
              <!-- ini buat submission(pikiranku abis ngisi data disini nanti dikirim ke page baru buat ngelengkapin datanya (disini data kecil kceilan)) -->
              <?php if (!auth()): ?>
                <li class="scroll-to-section"><a href="login.php">Login</a></li><!-- ini awalnya #contact -->
              <?php else: ?>
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

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 align-self-center">
          <div class="caption  header-text">
            <h6>SEO DIGITAL AGENCY</h6>
            <div class="line-dec"></div>
            <h4>Discover More <em>About Us</em></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod tempor incididunt ut labore et
              dolore.</p>
            <div class="main-button"><a href="#">Discover More</a></div>
            <span>or</span>
            <div class="second-button"><a href="#">Check our FAQs</a></div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <img src="assets/images/about-us-image.jpg" alt="">
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
                <form id="contact-form" action="" method="post" enctype="multipart/form-data">
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
                        <input type="surname" name="surname" id="surname" placeholder="Nomor Telepon" autocomplete="on"
                          required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Alamat E-mail"
                          required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Nomor Identitas (KTP)" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="message" id="message" placeholder="Alamat Tempat Tinggal"></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <div class="section-heading">
                        <h2><em>Isi Data Usaha</em></h2>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Nama Usaha" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="surname" name="surname" id="surname" placeholder="Jenis Usaha" autocomplete="on"
                          required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Lama Usaha Berjalan (Jika Ada)" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <p class="description">Silakan unggah file PDF yang berisi proposal usaha Anda. Ukuran maksimum file adalah 2MB.</p>
                        <input type="file" name="file" id="file" accept="application/pdf" required>
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
  <div class="video-info section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="video-thumb">
            <img src="assets/images/video-thumb.jpg" alt="">
            <a href="http://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h2>Detailed Information On What We Do &amp; Who We Are</h2>
            <div class="line-dec"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod tempor incididunt ut labore et
              dolore dolor.</p>
          </div>
          <div class="skills">
            <div class="skill-slide marketing">
              <div class="fill"></div>
              <h6>SEO Marketing</h6>
              <span>90%</span>
            </div>
            <div class="skill-slide digital">
              <div class="fill"></div>
              <h6>Digital Marketing</h6>
              <span>80%</span>
            </div>
            <div class="skill-slide media">
              <div class="fill"></div>
              <h6>Social Media Management</h6>
              <span>95%</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="happy-clients section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Our 4 Steps <em>To Success</em> &amp; <span>Happy Clients</span></h2>
            <div class="line-dec"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="active"><span>Project Introduction</span></div>
                    <div><span>Work Development</span></div>
                    <div><span>Data Analysis</span></div>
                    <div class="last-item"><span>Project Finishing</span></div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="row">
                          <div class="col-lg-7">
                            <h4>Best CSS Templates for you</h4>
                            <div class="line-dec"></div>
                            <p>Tale is the best SEO agency website template using Bootstrap v5.2.2 CSS for your company.
                              It is a free download provided by TemplateMo. There are 3 HTML pages, <a
                                href="index.html">Home</a>, <a href="about.html">About</a>, and <a
                                href="faqs.html">FAQ</a>.</p>
                            <div class="info">
                              <span>Website Design</span>
                              <span>User Interface</span>
                              <span>User Experience</span>
                              <span class="last-span">Digital Agency</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod tempor
                              incididunt ut labore et dolore dolor dolor sit amet, consectetur adipicing elit, sed doers
                              eiusmod.</p>
                          </div>
                          <div class="col-lg-5 align-self-center">
                            <img src="assets/images/happyclient-01.jpg" alt="">
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="row">
                          <div class="col-lg-7">
                            <h4>Detailed Information On What We Do</h4>
                            <div class="line-dec"></div>
                            <p>You are free to use this template for any purpose. You are not allowed to redistribute
                              the downloadable ZIP file of Tale SEO Template on any other template website. Please
                              contact us. Thank you.</p>
                            <div class="info">
                              <span>HTML CSS</span>
                              <span>Bootstrap 5</span>
                              <span>TemplateMo</span>
                              <span class="last-span">Development</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod tempor
                              incididunt ut labore et dolore dolor dolor sit amet, consectetur adipicing elit, sed doers
                              eiusmod.</p>
                          </div>
                          <div class="col-lg-5 align-self-center">
                            <img src="assets/images/happyclient-01.jpg" alt="">
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="row">
                          <div class="col-lg-7">
                            <h4>Responsive HTML CSS Templates</h4>
                            <div class="line-dec"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod kent tempor
                              incididunt ut labore et dolore dolor.</p>
                            <div class="info">
                              <span>SEO Trend</span>
                              <span>Digital Agency</span>
                              <span>Best Template</span>
                              <span class="last-span">Development</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod tempor
                              incididunt ut labore et dolore dolor dolor sit amet, consectetur adipicing elit, sed doers
                              eiusmod.</p>
                          </div>
                          <div class="col-lg-5 align-self-center">
                            <img src="assets/images/happyclient-01.jpg" alt="">
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="row">
                          <div class="col-lg-7">
                            <h4>Detailed Information about SEO Techniques</h4>
                            <div class="line-dec"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod kent tempor
                              incididunt ut labore et dolore dolor.</p>
                            <div class="info">
                              <span>Data Analysis</span>
                              <span>SEO Trend</span>
                              <span>Templates</span>
                              <span class="last-span">Research</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod tempor
                              incididunt ut labore et dolore dolor dolor sit amet, consectetur adipicing elit, sed doers
                              eiusmod.</p>
                          </div>
                          <div class="col-lg-5 align-self-center">
                            <img src="assets/images/happyclient-01.jpg" alt="">
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
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

          <br>Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a>
        </p>
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
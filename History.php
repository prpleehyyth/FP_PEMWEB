<?php
require_once ('auth.php');

include 'db_connect.php';

$result = $conn->query("SELECT * FROM pengajuan");

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

  <title>SIWARSA</title>

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

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-us-content">
            <div class="row">
              <class="col-lg-12">
                
              <?php
                if ($result->num_rows > 0) {
                    echo '<form id="contact-form" action="update_pengajuan.php" method="post">';
                    echo '<div class="row">';
                    echo '<div class="col-lg-12">';
                    echo '<div class="section-heading">';
                    echo '<h2><em>Isi data diri</em> &amp; <span>Sewa Ruko Anda</span></h2>';
                    echo '</div>';
                    echo '</div>';

                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col-lg-6">';
                        echo '<fieldset>';
                        echo '<input type="text" name="nama[]" value="' . $row['nama_usaha'] . '" placeholder="Nama Usaha" readonly>';
                        echo '</fieldset>';
                        echo '</div>';
                        echo '<div class="col-lg-6">';
                        echo '<fieldset>';
                        echo '<input type="text" name="nomor_telepon[]" value="' . $row['nomor_telepon'] . '" placeholder="Nomor Telepon" readonly>';
                        echo '</fieldset>';
                        echo '</div>';
                        echo '<div class="col-lg-6">';
                        echo '<fieldset>';
                        echo '<input type="text" name="email[]" value="' . $row['email'] . '" placeholder="Alamat E-mail" readonly>';
                        echo '</fieldset>';
                        echo '</div>';
                        echo '<div class="col-lg-6">';
                        echo '<fieldset>';
                        echo '<input type="text" name="no_ktp[]" value="' . $row['no_ktp'] . '" placeholder="Nomor Identitas (KTP)" readonly>';
                        echo '</fieldset>';
                        echo '</div>';
                        echo '<div class="col-lg-12">';
                        echo '<fieldset>';
                        echo '<textarea name="alamat[]" placeholder="Alamat Tempat Tinggal" readonly>' . $row['alamat'] . '</textarea>';
                        echo '</fieldset>';
                        echo '</div>';
                        echo '<div class="col-lg-6">';
                        echo '<fieldset>';
                        echo '<input type="text" name="nama_usaha[]" value="' . $row['nama_usaha'] . '" placeholder="Nama Usaha" readonly>';
                        echo '</fieldset>';
                        echo '</div>';
                        echo '<div class="col-lg-6">';
                        echo '<fieldset>';
                        echo '<input type="text" name="jenis_usaha[]" value="' . $row['jenis_usaha'] . '" placeholder="Jenis Usaha" readonly>';
                        echo '</fieldset>';
                        echo '</div>';
                        echo '<div class="col-lg-12">';
                        echo '<fieldset>';
                        echo '<input type="text" name="lama_usaha[]" value="' . $row['lama_usaha'] . '" placeholder="Lama Usaha Berjalan (Jika Ada)" readonly>';
                        echo '</fieldset>';
                        echo '</div>';
                        echo '<div class="col-lg-6">';
                        echo '<fieldset>';
                        echo '<input type="text" name="jenis_ruko[]" value="' . $row['id_ruko'] . '" placeholder="Jenis Ruko" readonly>';
                        echo '</fieldset>';
                        echo '</div>';
                        echo '<div class="col-lg-6">';
                        echo '<fieldset>';
                        echo '<input type="text" name="durasi[]" value="' . $row['durasi'] . '" placeholder="Durasi Penyewaan" readonly>';
                        echo '</fieldset>';
                        echo '</div>';
                        echo '<div class="col-lg-6">';
                        echo '<fieldset>';
                        echo '<input type="date" name="tanggal_mulai[]" value="' . $row['tanggal_mulai'] . '" placeholder="Pilih Tanggal Penyewaan" readonly>';
                        echo '</fieldset>';
                        echo '</div>';
                        echo '<div class="col-lg-6">';
                        echo '<fieldset>';
                        echo '<input type="text" name="status[]" value="' . $row['status'] . '" placeholder="Status Penyewaan" readonly>';
                        echo '</fieldset>';
                        echo '</div>';
                        echo '<div class="col-lg-12">';
                        echo '<fieldset>';
                        echo '<textarea name="keterangan[]" placeholder="Alasan" readonly>' . $row['keterangan'] . '</textarea>';
                        echo '</fieldset>';
                        echo '</div>';
                    }

                    echo '</div>';
                    echo '</form>';
                } else {
                    echo '<p>No records found.</p>';
                }
                $conn->close();
                ?>

                
                <div class="more-info">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-phone"></i>
                        <h4><a href="https://wa.me/6289631317064" target="_blank">+62 89631317064</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-envelope"></i>
                        <h4><a href="https://mailto:22082010098@student.upnjatim.ac.id" target="_blank">support@siwarsa.com</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-map-marker"></i>
                        <h4><a href="https://maps.app.goo.gl/4Vzup13GjnDdAGG57" target="_blank">SIWARSA Headquarter</a></h4>
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
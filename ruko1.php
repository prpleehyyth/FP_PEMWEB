
<?php 
  require_once('auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | E-commerce</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-tale-seo-agency.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

</head>
<body class="hold-transition sidebar-mini">
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
                      <li class="scroll-to-section"><a href="about.php">Pengajuan</a></li>
                      <?php if(!auth()) : ?>
                      <li class="scroll-to-section"><a href="login.php">Login</a></li>
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
<!-- Site wrapper -->
<div class="wrapper">

    
    <!-- Main content -->
    <div class = "section">
    <section class="content">
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">Ruko 01 - Full Hijau</h3>
              <div class="col-12">
                <img src="dist/img/display01.png" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">Ruko 01 - Full Hijau</h3>
              <p> Disewakan: Rumah Toko (Ruko) dengan lokasi strategis di pusat bisnis. Properti ini menawarkan ruang usaha yang luas dan ideal untuk berbagai jenis bisnis seperti retail, kantor, atau kafe. Lantai ini dilengkapi dengan fasilitas lengkap untuk memenuhi kebutuhan sehari-hari. Terletak di area dengan akses mudah ke berbagai fasilitas umum, properti ini menjamin keamanan dan berada di lingkungan yang ramai dengan potensi pelanggan tinggi. Investasi ini memberikan peluang keuntungan yang signifikan.</p>
              <hr>
              <h5>Ukuran : </h5>
              <p>4m x 5m</p>
              <br>
              <h5>Harga : </h5>
              <p>Rp1.200.000 / 3 bulan</p>
              
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2024 <a href="https://adminlte.io">SIWARSA</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
</script>
</body>
</html>

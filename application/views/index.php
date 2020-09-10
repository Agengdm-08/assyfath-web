<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>PT. MITERA SEJATRA JAYA AGUNG | <?php echo $title ?></title>
  <meta content="" name="descriptison" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="<?php echo asset_url('frontend/') ?>img/favicon.png" rel="icon" />
  <link href="<?php echo asset_url('frontend/') ?>img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="<?php echo asset_url('frontend/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo asset_url('frontend/') ?>vendor/animate.css/animate.min.css" rel="stylesheet" />
  <link href="<?php echo asset_url('frontend/') ?>vendor/icofont/icofont.min.css" rel="stylesheet" />
  <link href="<?php echo asset_url('frontend/') ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="<?php echo asset_url('frontend/') ?>vendor/venobox/venobox.css" rel="stylesheet" />
  <link href="<?php echo asset_url('frontend/') ?>vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="<?php echo asset_url('frontend/') ?>vendor/aos/aos.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="<?php echo asset_url('frontend/') ?>css/style.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: Moderna - v2.1.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container">
      <div class="logo float-left">
        <a class="text-light">
          <a href="<?php echo site_url() ?>"><span>PT. MITERA SEJATRA JAYA AGUNG</span></a>
        </a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="<?php echo asset_url('frontend/') ?>img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="<?php echo site_url() ?>">Beranda</a></li>
          <li><a href="about.html">Tentang Kami</a></li>
          <li><a href="product.html">Produk</a></li>
          <li><a href="gallery.html">Galeri</a></li>
          <li><a href="testimoni.html">Testimoni</a></li>
          <li><a href="contact.html">Kontak Kami</a></li>
        </ul>
      </nav>
      <!-- .nav-menu -->
    </div>
  </header>
  <!-- End Header -->
  <?php $this->load->view($page); ?>
  <!-- ======= WhatsApp ======= -->
  <div style="position: fixed; right: 20px; bottom: 80px">
    <a href="https://api.whatsapp.com/send?phone=+6285770594004&text=ASSALAMMUALAIKUM TOKO ASSYIFATH. SAYA INGIN PESAN PRODUK ANDA" target="_blank">
      <button style="
            background: #32c03c;
            vertical-align: center;
            height: 36px;
            border-radius: 5px;
          ">
        <img src="https://web.whatsapp.com/img/favicon/1x/favicon.png" /></button></a>
  </div>
  <!-- End WhatsApp Section -->
  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        Designed by <a href="https://bootstrapmade.com/">JokiCode</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo asset_url('frontend/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo asset_url('frontend/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo asset_url('frontend/') ?>vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo asset_url('frontend/') ?>vendor/php-email-form/validate.js"></script>
  <script src="<?php echo asset_url('frontend/') ?>vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo asset_url('frontend/') ?>vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo asset_url('frontend/') ?>vendor/counterup/counterup.min.js"></script>
  <script src="<?php echo asset_url('frontend/') ?>vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo asset_url('frontend/') ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo asset_url('frontend/') ?>vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo asset_url('frontend/') ?>js/main.js"></script>
</body>

</html>
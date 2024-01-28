<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('judul')-BPS JAWA TENGAH.Inc - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  
  <!-- Vendor CSS Files -->

  <link href="{{asset('tema/vendor/aos/aos.css')}}" rel="stylesheet">
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> -->
  <link href="{{asset('tema/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <!-- <link href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
  <link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css"> -->

  <!-- Template Main CSS File -->
  <link href="{{asset('tema/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.10.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{asset('tema/img/BPS.jpg')}}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">BPS JATENG</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/bps_statistics" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/bpsprovjateng/" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/bpsprovjateng/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.youtube.com/@BPSProvinsiJawaTengah" class="youtube"><i class="bx bxl-youtube"></i></a>
          <a href="https://jateng.bps.go.id/" class="bi-globe"><i class="bx bxl-bi-globe"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#pegawai" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Kegiatan</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>BPS JATENG</h1>
      <p>ASN <span class="typed" data-typed-items="JAWA TENGAH, BerAKHLAK BAIK"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Badan Pusat Statistik adalah Lembaga Pemerintah Non-Kementrian yang bertanggung jawab langsung kepada Presiden. Sebelumnya, BPS merupakan Biro Pusat Statistik, yang dibentuk berdasarkan UU Nomor 6 Tahun 1960 tentang Sensus dan UU Nomer 7 Tahun 1960 tentang Statistik. Sebagai pengganti kedua UU tersebut ditetapkan UU Nomor 16 Tahun 1997 tentang Statistik. Berdasarkan UU ini yang ditindaklanjuti dengan peraturan perundangan dibawahnya, secara formal nama Biro Pusat Statistik diganti menjadi Badan Pusat Statistik.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{asset('tema/img/BPS.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Badan Pusat Statistik Jawa Tengah</h3>
            <p class="fst-italic">
            Tugas, fungsi dan kewenangan BPS telah ditetapkan berdasarkan Peraturan Presiden Nomor 86 Tahun 2007 tentang Badan Pusat Statistik dan Peraturan Kepala Badan Pusat Statistik Nomor 7 Tahun 2008.
            </p>

            <p class="fst-italic">
            BPS Provinsi mempunyai tugas melaksanakan penyelenggaraan statistik dasar di provinsi sesuai dengan ketentuan peraturan perundang-undangan.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="pegawai" class="pegawai">
      <div class="container">
      {{-- @include('Pegawai.index') --}}
      </div>
      <!-- <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .table-bordered{
                background-image: url("{{asset('tema/img/tabel.jpg')}}");
                background-size: 700px 700px;
                background-repeat: no-repeat;
                background-position: center;
            }
        </style> -->


    </section><!-- End Resume Section -->
    
    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="portfolio section-bg">
      <div class="container">
      </div> -->

        
    </section><!-- End Portfolio Section -->

    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>BPS JATENG</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. Pahlawan No.6, Pleburan, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50241</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>bps3300@bps.go.id</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>024 - 8412802, 8412804, 8412805</p>
              </div>

              <div class="mapouter"><div class="gmap_canvas"><iframe width="400" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=Badan%20Pusat%20Statistik%20(BPS)%20Provinsi%20Jawa%20Tengah&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:300px;width:400px;}</style><a href="https://www.embedgooglemap.net">google maps html generator</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:400px;}</style></div></div>
            </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; BPS <strong><span>JATENG</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script> -->
  <!-- Vendor JS Files -->
  <script src="{{asset('tema/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('tema/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('tema/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('tema/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('tema/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('tema/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('tema/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('tema/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('tema/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('tema/js/main.js')}}"></script>

  <script>
  $(document).ready(function () {
  $('#tabel1').DataTable({
   "ordering": false // false to disable sorting (or any other option)
  });
  $('.dataTables_length').addClass('bs-select'); 
});
  </script>
</body>

</html>
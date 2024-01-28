<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daeng Barbershop | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="{{asset('tema/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/css/style.css')}}" rel="stylesheet">
</head>
<style>
    .main {
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        
    }
    .sidebar {
        background: rgb(43, 39, 52);
        color: white;
    }
    .sidebar ul {
        list-style-type: none;

    }
    .sidebar li {
        padding: 10px 5px;
    }
    .content {
        height: 100vh;
        overflow-y: auto; 
        padding: 20px;
    } 
        

    
</style>



<body>

   <div class="body-content h-100">
    <div class="row g-0 h-100">
        <div class="sidebarp-5 col-lg-2 collapse d-lg-block" id="navbarTogglerDemo03">
            <nav id="navbar" class="nav-menu navbar">
                <header id="header">
                    <div class="d-flex flex-column">               
                        <header id="header">
                            <div class="d-flex flex-column">
                        
                              <div class="profile">
                                <img src="{{asset('tema/img/BPS.jpg')}}" alt="" class="img-fluid rounded-circle">
                                <h1 class="text-light"><a href="index.html">Halo, nama </a></h1>
                                <div class="social-links mt-3 text-center">
                                </div>
                              </div>
         <ul>
            <li><a href="dashboard" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Dashboard</span></a></li>
          <li><a href="Datapelanggan" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Data Pelanggan</span></a></li>
          <li><a href="Dataserver" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Data Server</span></a></li>
          <li><a href="Voucher" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Voucher</span></a></li>
          <li><a href="Konten" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Konten</span></a></li>
            </ul>
            </nav>
        </div>
        <div class="content p-5 col-lg-10 collapse d-lg-block ">
            @yield('content')
        </div>
    </div>
   </div> 
   

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

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
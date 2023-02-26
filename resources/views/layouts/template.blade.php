<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('judul') HPMIndonesia</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('theme/img/logonbg.png')}}" rel="icon">
    <link href="{{asset('theme/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{asset('theme/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('theme/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('theme/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('theme/css/main.css')}}" rel="stylesheet">

  </head>

  <body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{url('/')}}" class="logo d-flex align-items-center" >
          <img src="{{asset('theme/img/logonbg.png')}}" alt="" data-aos="fade-left" data-aos-delay="50" data-aos-duration="2000"> 
          <h1 data-aos="fade-left" data-aos-delay="150" data-aos-duration="2000"><span></span>Hanjaya Perkasa Metals Indonesia</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
          <ul>
          <li data-aos="fade-right" data-aos-delay="650" data-aos-duration="1500"><a href="{{url('/')}}">Home</a></li>
            <li data-aos="fade-right" data-aos-delay="550" data-aos-duration="1500"><a href="{{url('/about')}}">About</a></li>
            <li data-aos="fade-right" data-aos-delay="450" data-aos-duration="1500"><a href="{{url('/services')}}">Services</a></li>
            <li data-aos="fade-right" data-aos-delay="350" data-aos-duration="1500"><a href="{{url('/products')}}">Products</a></li>
            <li data-aos="fade-right" data-aos-delay="250" data-aos-duration="1500"><a href="{{url('/projects')}}">Projects</a></li>
            <li data-aos="fade-right" data-aos-delay="150" data-aos-duration="1500"><a href="{{url('/contacts')}}">Contact</a></li>
            <li data-aos="fade-right" data-aos-delay="50" data-aos-duration="1500"><a href="{{url('/login')}}">Order</a></li>
          </ul>
        </nav>
        <!-- .navbar -->

      </div>
    </header>
    <!-- End Header -->
    <!-- ======= Hero Section ======= -->
    @yield('hero')
    <!-- End Hero Section -->
    <!-- <main id="main"> -->
    @yield('main')
  <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

      <div class="footer-content position-relative">
        <div class="container">
          <div class="row">

            <div class="col-lg-4 col-md-6">
              <div class="footer-info">
                <h3>Hpmetals Indonesia</h3>
                <p>
                Ngoro Industri Persada Blok K-2,  <br>
                Ngoro - Mojokerto, <br>
                Jawa Timur, Indonesia<br>
                  <strong>Phone:</strong> +62321-6819277<br>
                  <strong>Phone:</strong> +62321-6819278<br>
                  <strong>Email:</strong> info@hpmindonesia.co.id<br>
                </p>
                <div class="social-links d-flex mt-3">
                  <a href="https://www.tiktok.com/@hpmindonesia" class="d-flex align-items-center justify-content-center"><i class="bi bi-tiktok"></i></a>
                  <a href="https://www.facebook.com/people/HP-Metals-Indonesia/150081674501517/" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/hpmindonesia/?utm_medium=copy_link&hl=id" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                  <!-- <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a> -->
                </div>
              </div>
            </div><!-- End footer info column-->

            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/about')}}">About us</a></li>
                <li><a href="{{url('/services')}}">Services</a></li>
                <li><a href="{{url('/projects')}}">Projects</a></li>
                <li><a href="{{url('/contact')}}">contact</a></li>

                <!-- <li><a href="#">Privacy policy</a></li> -->
              </ul>
            </div><!-- End footer links column-->

            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><a href="#">Raw Materials</a></li>
                <li><a href="#">Moulding</a></li>
                <li><a href="#">Extrusion</a></li>
                <li><a href="#">Anodizing</a></li>
                <li><a href="#">Powder Coating</a></li>
                <li><a href="#">Fabrication</a></li>

                <!-- <li><a href="#">Graphic Design</a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>



    </footer>
    <!-- End Footer -->


    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('theme/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('theme/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('theme/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('theme/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('theme/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('theme/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('theme/js/main.js')}}"></script>

  </body>

  </html>

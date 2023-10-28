<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name', 'sozoilfield') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css" rel="stylesheet') }}">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <style>
    .navbar ul .dropdown ul li a{
      color: black;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  @include('includes.header')
  <!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Sozoilfield</h3>
              <p><b>Port Harcourt</b><br>
                No.17 Rumucholu Atalli, <br>
                Rumukwurusi Port Harcourt<br>
                <p><b>Delta State</b><br>
                DSC Expressway, Okpaka, Udu, <br>
                Delta State<br>
                <p><b>Lagos State</b><br>
                Tokumbo Alli str. Off Toyin road. Ikeja<br><br>

                <strong>Phone:</strong> +2348134326706<br>
                <strong>Email:</strong> contact@Sozoilfield.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                {{-- <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a> --}}
                <a href="https://www.facebook.com/sozoilfield" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                {{-- <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a> --}}
                <a href="https://www.linkedin.com/company/sozoilfield/" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-4 col-md-4 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-4 col-md-4 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Trainings and certification</a></li>
              <li><a href="#">Supply of safety kits and equipment</a></li>
              <li><a href="#">HSE Consultancy</a></li>
              <li><a href="#">General contract</a></li>
              <li><a href="#">Inspection services</a></li>
            </ul>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    @include('includes.copyright')

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>

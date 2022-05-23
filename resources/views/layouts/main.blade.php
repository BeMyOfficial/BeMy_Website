<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <script src="https://kit.fontawesome.com/d2dec4d242.js" crossorigin="anonymous"></script>
    <style>
      lottie-player {
        margin: 0 auto;
      }
    </style>
    <title>Be My | {{ $title }}</title>
  </head>
  <body>

    @include('partials.navbar')
    
    <div class="container">
        @yield('container')
    </div>

    <!-- Remove the container if you want to extend the Footer to full width. -->
  <footer
          class="text-center text-lg-start text-dark mt-5"
          style="background-color: aqua"
          >
    <!-- Grid container -->
    <div class="container-fluid p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 me-3  mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Be My
            </h6>
            <p>
              Be My menawarkan jasa kepada masyarakat khususnya mahasiswa dan pekerja yang memerlukan teman untuk mendengarkan maupun bertukar pikiran dengan mereka secara virtual.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2  mt-3 ">
            <h6 class="text-uppercase mb-4 font-weight-bold">Services</h6>
            <p>
              <a class="text-dark text-decoration-none">Be My Chat Friend</a>
            </p>
            <p>
              <a class="text-dark text-decoration-none">Be My Call Friend</a>
            </p>
            <p>
              <a class="text-dark text-decoration-none">Be My Sleepcall</a>
            </p>
            <p>
              <a class="text-dark text-decoration-none">Be My Sweatheart</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-3  mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-envelope mr-3"></i> customerservicebemy@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
              Copyright © BeMy 2022
            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
            <!-- Facebook -->
            <a
               class="btn btn-outline-dark btn-floating m-1"
               class="text-dark"
               role="button"
               ><i class="fa-brands fa-facebook"></i></a>

            <!-- Instagram -->
            <a
               class="btn btn-outline-dark btn-floating m-1"
               class="text-dark"
               role="button"
               ><i class="fa-brands fa-instagram"></i></a>
          </div>
          <!-- Grid column -->
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
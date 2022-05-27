<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="https://kit.fontawesome.com/d2dec4d242.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title>be my</title>
</head>
<body>
  
  <nav class="navbar navbar-expand-sm fixed-top shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#home"><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-3 ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#service">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#how">Cara Pesan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#trouble">Laporan Kendala</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



`<div id="home" style="height: 150px"></div>
  <div class="container home mb-5">
    <div class="row">
      <div class="col-md-4 mt-2 mb-2">
        <img src="{{ asset('img/chat.svg') }}" alt="chat" class="mx-auto d-block">
      </div>
      <div class="col-md-8 mt-2 mb-2">
        <div class="mt-5 text-center">
          <h5>BeMy.id</h5>
          <h3>Temukan teman ngobrol dengan praktis, legal, aman dan murah.</h3>
          <a href="#service" class="text-decoration-none">
            <button class="btn">
              Pesan Sekarang
            </button>
            
          </a>
        </div>
      </div>
    </div>
  </div>


  <div id="about" style="height: 200px"></div>
  <div class="container  about">
    <div class="row">
      <div class="col-md-5 mt-5 mb-2 mx-auto">
        <img src="{{ asset('img/about.svg') }}" alt="about us" class="mx-auto d-block">
      </div>
      <div class="col-md-5 mt-4 mb-2 mx-auto">
        <h3>Tentang Kami</h3>
        <p>Be My menawarkan jasa kepada masyarakat yang memerlukan teman untuk mendengarkan maupun bertukar pikiran dengan mereka secara virtual. Be My bermitra dengan para talent untuk memberikan layanan jasa yang mengutamakan keamanam, kenyamanan, dan interaktif dengan para klien. </p>
      </div>
    </div>
  </div>

  <div id="trouble" style="height: 200px"></div>
  <div class="container trouble">
    <div class="row">
      <div class="col-md-4 mt-5 mb-2 mx-auto">
        <img src="{{ asset('img/trouble.svg') }}" alt="trouble" class="mx-auto d-block">
      </div>
      <div class="col-md-8 mt-5 mb-2 mx-auto">
        <h2>Mengalami Kendala ?</h2>
        <p>Segera laporkan jika kamu mengalami kendala pada saat pendaftaran, pembayaran, atau terjadi masalah dengan akun langganan kamu. Kami akan segera menghubungi kamu untuk membantu menyelesaikan kendala yang kamu hadapi.</p>
        <a href="#" class="text-decoration-none d-grid">
          <button class="btn d-block">
            Ajukan Laporan
          </button>
          
        </a>
      </div>
    </div>
  </div>

  <div id="service" style="height: 100px"></div>
  <div class="container-fluid service">
    <h3 class="text-center mb-5">Jasa yang kami tawarkan</h3>
    <div class="row text-center mb-5">
      
      <div class="col-md-2 mx-auto ">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="{{ asset('img/chat.json') }}"  background="transparent"  speed="1"  style="width: 150px; height: 150px;"  loop  autoplay></lottie-player>
        {{-- https://assets3.lottiefiles.com/private_files/lf30_osufshhg.json --}}
        <h5 class="mt-3">Be My Chat Friend</h5>
        <div class="row px-2">
          <div class="col text-start">
            1 hari
          </div>
          <div class="col text-end fw-bold text-dark">
            Rp 20.000
          </div>
        </div>
        <div class="row px-2">
          <div class="col text-start">
            3 hari
          </div>
          <div class="col text-end fw-bold text-dark">
            Rp 50.000
          </div>
        </div>
        <div class="mb-2 mt-2 pt-2 ">
          <a target="_blank" href="https://wa.me/6288808322034?text=Halo *_BeMy.id!_* Aku mau pesan jasa chat friend nih" class="text-decoration-none d-grid">
            <button class="btn d-block">
              Pesan
            </button>
          </a>
        </div>
      </div>

      <div class="col-md-2 mx-auto  ">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="{{ asset('img/call.json') }}"  background="transparent"  speed="1"  style="width: 150px; height: 150px;"  loop  autoplay></lottie-player>
        {{-- https://assets7.lottiefiles.com/temp/lf20_DMIMVr.json --}}
        <h5 class="mt-3">Be My Call Friend</h5>
        <div class="row px-2">
          <div class="col text-start">
            1 jam
          </div>
          <div class="col text-end fw-bold text-dark">
            Rp 20.000
          </div>
        </div>
        <div class="mb-2 pt-2  ">
          <a target="_blank" href="https://wa.me/6288808322034?text=Halo *_BeMy.id!_* Aku mau pesan jasa call friend nih" class="text-decoration-none d-grid">
            <button class="btn d-block">
              Pesan
            </button>
          </a>
        </div>
      </div>

      <div class="col-md-2 mx-auto ">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="{{ asset('img/sleepcall.json') }}"  background="transparent"  speed="1"  style="width: 150px; height: 150px;"  loop  autoplay></lottie-player>
        {{-- https://assets7.lottiefiles.com/private_files/lf30_qs7ZaV.json --}}
        <h5 class="mt-3">Be My Sleepcall</h5>
        <div class="row px-2">
          <div class="col text-start">
            24.00-02.00
          </div>
          <div class="col text-end fw-bold text-dark">
            Rp 25.000
          </div>
        </div>
        <div class="row px-2">
          <div class="col text-start">
            23.00-02.00
          </div>
          <div class="col text-end fw-bold text-dark">
            Rp 30.000
          </div>
        </div>
        <div class="row px-2">
          <div class="col text-start">
            24.00-03.00
          </div>
          <div class="col text-end fw-bold text-dark">
            Rp 35.000
          </div>
        </div>
        <div class="row px-2">
          <div class="col text-start">
            23.00-03.00
          </div>
          <div class="col text-end fw-bold text-dark">
            Rp 40.000
          </div>
        </div>
        <div class="mb-2 mt-2 pt-2 ">
          <a target="_blank" href="https://wa.me/6288808322034?text=Halo *_BeMy.id!_* Aku mau pesan jasa sleepcall nih" class="text-decoration-none d-grid">
            <button class="btn d-block">
              Pesan
            </button>
          </a>
        </div>
      </div>

      <div class="col-md-2 mx-auto ">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="{{ asset('img/sweetheart.json') }}"  background="transparent"  speed="1"  style="width: 150px; height: 150px;"  loop  autoplay></lottie-player>
        {{-- https://assets6.lottiefiles.com/packages/lf20_kfxgxq3x.json --}}
        <h5 class="mt-3">Be My Sweetheart</h5>
        <div class="row px-2">
          <div class="col text-start">
            1 hari
          </div>
          <div class="col text-end fw-bold text-dark">
            Rp 35.000
          </div>
        </div>
        <div class="row px-2">
          <div class="col text-start">
            3 hari
          </div>
          <div class="col text-end fw-bold text-dark">
            Rp 100.000
          </div>
        </div>
        <div class="row px-2">
          <div class="col text-start">
            7 hari
          </div>
          <div class="col text-end fw-bold text-dark">
            Rp 225.000
          </div>
        </div>
        <div class="mb-2 mt-2 pt-2 ">
          <a target="_blank" href="https://wa.me/6288808322034?text=Halo *_BeMy.id!_* Aku mau pesan jasa sweetheart nih" class="text-decoration-none d-grid">
            <button class="btn d-block">
              Pesan
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>


  <div id="how" style="height: 100px;"></div>
  <div class="container how">
    <h3 class="text-center mb-2">Cara Pesan</h3>
    <div class="row">
      <div class="col-md-2 mx-auto mt-5">
        <img src="{{ asset('img/order.svg') }}" alt="pesan">
        <div class="row mt-3">
          <div class="col mx-auto text-center">
            <div class="number text-center">
              1
            </div>
            <h5>Pesan Jasa</h5>
          </div>
        </div>
      </div>

      <div class="col-md-2 mx-auto mt-5">
        <img src="{{ asset('img/payment.svg') }}" alt="bayar">
        <div class="row mt-3">
          <div class="col mx-auto text-center">
            <div class="number text-center">
              2
            </div>
            <h5>Pembayaran</h5>
          </div>
        </div>
      </div>

      <div class="col-md-2 mx-auto mt-5">
        <img src="{{ asset('img/wait.svg') }}" alt="wait">
        <div class="row mt-3">
          <div class="col mx-auto text-center">
            <div class="number text-center">
              3
            </div>
            <h5>Menunggu Proses</h5>
          </div>
        </div>
      </div>

      <div class="col-md-2 mx-auto mt-5">
        <img src="{{ asset('img/confirm.svg') }}" alt="confirm">
        <div class="row mt-3">
          <div class="col mx-auto text-center">
            <div class="number text-center">
              4
            </div>
            <h5>Pesanan Dikonfirmasi</h5>
          </div>
        </div>
      </div>

      <div class="col-md-2 mx-auto mt-5">
        <img src="{{ asset('img/done.svg') }}" alt="done">
        <div class="row mt-3">
          <div class="col mx-auto text-center">
            <div class="number text-center">
              5
            </div>
            <h5>Selesai</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="faq" style="height: 100px"></div>
  <div class="container faq" id="accordion">
    <h3 class="text-center mb-2">Frequently Asked Questions (FAQ)</h3>
    <div class="row mt-3">
      <div class="col-md-6 mx-auto">
        <button class="collapsible">Payment method apa saja yang ada di BeMy</button>
        <div class="content">
          <p>Bank transfer Mandiri, BCA, Gopay, Dana, Linkaja</p>
        </div>
      </div>

      <div class="col-md-6 mx-auto">
        <button class="collapsible">Bagaimana bila ada kendala ketika proses pembayaran</button>
        <div class="content">
          <p>Bila kamu mengalami kendala dalam melakukan proses pembayaran, seperti tidak mendapat konfirmasi dan follow up. Mohon isi form pada <a href="">Link ini</a>. Kami akan segera menghubungi kamu maksimal 1 x 24 jam.</p>
        </div>
      </div>
    </div>


  </div>
  <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;
    
    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        } 
      });
    }
    </script>



  <footer
          class="text-center text-lg-start text-dark mt-5""
          >
    <!-- Grid container -->
    <div class="container-fluid p-4 pb-0" >
      <!-- Section: Links -->
      <section class="" >
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 me-3  mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Tentang kami
            </h6>
            <p>
              Be My menawarkan jasa kepada masyarakat khususnya mahasiswa dan pekerja yang memerlukan teman untuk mendengarkan maupun bertukar pikiran dengan mereka secara virtual.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2  mt-3 ">
            <h6 class=" mb-4 font-weight-bold">Be My</h6>
            <a href="#about">Tentang Kami</a>
            <a href="#how">Cara Pesan</a>
            <a href="#">Syarat dan Ketentuan</a>
            <a href="#">Kebijakan Privasi</a>
            <a href="#">Laporan Kendala</a>
          </div>
          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2  mt-3 ">
            <h6 class="text-uppercase mb-4 font-weight-bold">Services</h6>
            <p>
              Be My Chat Friend
            </p>
            <p>
              Be My Call Friend
            </p>
            <p>
              Be My Sleepcall
            </p>
            <p>
              Be My Sweatheart
            </p>
          </div>

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-3  mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <a target="_blank" href="mailto:customerservicebemy@gmail.com"><i class="fas fa-envelope mr-3"></i> customerservicebemy@gmail.com</a>
            <a target="_blank" href="https://wa.me/6288808322034"><i class="fa-brands fa-whatsapp mr-3"></i> + 62 8880 8322 034</a>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0" style="border-top: 3px solid white;">
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
            <a href=""
               class="btn btn-outline-light btn-floating m-1"
               class="text-dark"
               role="button"
               ><i class="fa-brands fa-facebook"></i></a>

            <!-- Instagram -->
            <a target="_blank" href="https://instagram.com/bemyofficial.id?igshid=YmMyMTA2M2Y="
               class="btn btn-outline-light btn-floating m-1"
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script type="text/javascript" >
    $(document).on('click', 'a[href^="#"]', function (event) {
      event.preventDefault();
  
      $('html, body').animate({
          scrollTop: $($.attr(this, 'href')).offset().top
      }, 600);
    });
  </script>
</body>
</html>
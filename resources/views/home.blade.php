@extends('layouts.main')

@section('container')
    <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel" style="height: 20%">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active text-center">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets10.lottiefiles.com/private_files/lf30_aprp5fnm.json"  background="transparent"  speed="1"  style="width: 25%;"  loop  autoplay class="d-block w-35"></lottie-player>
            <div class="carousel-caption d-none d-md-block">
              <h5>Kesepian</h5>
            </div>
          </div>
          <div class="carousel-item">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_lir25ejl.json"  background="transparent"  speed="1"  style="width: 30%;"  loop  autoplay class="d-block w-50"></lottie-player>
            <div class="carousel-caption d-none d-md-block">
              <h5>Butuh Teman Ngobrol</h5>
            </div>
          </div>
          <div class="carousel-item">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_f2jo61ci.json"  background="transparent"  speed="1"  style="width: 62.5%;"  loop  autoplay class="d-block w-80"></lottie-player>
            <div class="carousel-caption d-none d-md-block">
              <h5>Be My hadir untuk membantu anda</h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <h2 class="text-center mt-5">Jasa yang kami tawarkan</h2>
      <div class="row row-cols-1 row-cols-md-2 g-4 mt-5 mb -5">
        <div class="col">
          <div class="card h-100">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets3.lottiefiles.com/private_files/lf30_osufshhg.json"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop  autoplay></lottie-player>
            <div class="card-body">
              <h5 class="card-title text-center">Be My Chat Friend</h5>
              <p>Jasa mengobrol dalam bentuk teks secara langsung antara klien dan talent Be My</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets7.lottiefiles.com/temp/lf20_DMIMVr.json"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop  autoplay></lottie-player>
            <div class="card-body">
              <h5 class="card-title text-center">Be My Call Friend</h5>
              <p>Jasa mengobrol melalui panggilan telepon antara klien dan talent Be My</p>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets1.lottiefiles.com/private_files/lf30_qs7ZaV.json"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop  autoplay></lottie-player>
                <div class="card-body">
                  <h5 class="card-title text-center">Be My Sleepcall</h5>
                  <p>Jasa mengobrol sebelum tidur melalui panggilan telepon antara klien dan talent Be My</p>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_kfxgxq3x.json"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop  autoplay></lottie-player>
                <div class="card-body">
                  <h5 class="card-title text-center">Be My sweetheart</h5>
                  <p>Jasa mengobrol dalam bentuk teks dan pesan suara antara klien dan talent Be My</p>
                </div>
              </div>
        </div>
      </div>

      <div class="mt-5 mb-5 text-center">
        <a href="#" class="text-decoration-none text-dark">
          <button class="btn btn-primary">
            <i class="fa-brands fa-whatsapp"></i> Pesan Jasa
          </button>
        </a>
      </div>

      <div class="container mt-5 mb-5">
        <h4 class="text-center">Tarif Jasa</h4>
        <div class="row row-cols-1 row-cols-md-2 g-4 mt-5 mb -5 text-center">
          <div class="col">
            <div class="card">
              <div class="card-header text-center">
                Be My Chat Friend
              </div>
              <div class="row">
                <div class="col border-end">
                  1 hari
                </div>
                <div class="col">
                  Rp 20.000
                </div>
              </div>
              <div class="row">
                <div class="col border-end">
                  3 hari
                </div>
                <div class="col">
                  Rp 50.000
                </div>
              </div>
              </div>
            </div>
          

          <div class="col">
            <div class="card ">
              <div class="card-header text-center">
                Be My Call Friend
              </div>
              <div class="row">
                <div class="col border-end">
                  1 jam
                </div>
                <div class="col">
                  Rp 20.000
                </div>
              </div>
              </div>
            </div>

          <div class="col">
            <div class="card">
              <div class="card-header text-center">
                Be My Sleepcall
              </div>
              <div class="row">
                <div class="col border-end">
                  24.00-02.00
                </div>
                <div class="col">
                  Rp 25.000
                </div>
              </div>
              <div class="row">
                <div class="col border-end">
                  23.00-02.00 
                </div>
                <div class="col">
                  Rp 30.000
                </div>
              </div>
              <div class="row">
                <div class="col border-end">
                  24.00-03.00 
                </div>
                <div class="col">
                  Rp 35.000
                </div>
              </div>
              <div class="row">
                <div class="col border-end">
                  23.00-03.00 
                </div>
                <div class="col">
                  Rp 40.000
                </div>
              </div>

              </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-header text-center">
                Be My Sweetheart
              </div>
              <div class="row">
                <div class="col border-end">
                  1 hari
                </div>
                <div class="col">
                  Rp 35.000
                </div>
              </div>
              <div class="row">
                <div class="col border-end">
                  3 hari
                </div>
                <div class="col">
                  Rp 100.000
                </div>
              </div>
              <div class="row">
                <div class="col border-end">
                  3 hari
                </div>
                <div class="col">
                  Rp 225.000
                </div>
              </div>


              </div>
          </div>
          


        </div>
        
      </div>


@endsection
    

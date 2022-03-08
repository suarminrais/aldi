<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!--fontsome icon-->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <!--stle css-->
    <link rel="stylesheet" href="style.css" />
    <title>Naturu | back to nature</title>
  </head>
  <body class="login">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparant pt-5 pb-5">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="gambar/logo3.png" alt="" width="80" height="80" class="d-inline-block align-text-top" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/" style="font-size: larger">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Layanan" style="font-size: larger">Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login" style="font-size: larger">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- tampilan awal -->
    <div class="container">
      <div class="box3">
        <div class="row pb-5">
          <div class="col-sm-5 col-md-6">
            <h2 class="heading">SELAMAT DATANG DI NATURU HEALTH</h2>
            <h5 class="paragraf">Dapatkan pengalaman yang lebih baik dalam mencari referensi atau mencari tanaman herbal untuk anda hanya Naturu Health, Ayo mulai sekarang bersama kami!</h5>
            <br />
            <a href="#Layanan">
              <button type="button" class="btn btn-success">Mulai</button>
            </a>
            <a href="#tentang"> <button type="button" class="btn btn-outline-success">apa itu Naturu health ?</button></a>
          </div>

          <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
            <img src="gambar/gambar-dokter.svg" class="rounded float-end" alt="tumbuhan" width=" 600 " />
          </div>
        </div>
      </div>
    </div>
    <!-- tampilan layanan -->
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="konsul" id="Layanan">LAYANAN</h2>
        <p class="tagline">Silahkan pilih jenis layanan yang telah disediakan di bawah</p>

        <div class="row pt-4">
          <div class="col-md-4">
            <a href="kns.html"
              ><span class="lingkaran"><i class="fas fa-stethoscope fa-5x"></i></span>
              <h3 class="mt-3 laya">Konsultasi</h3></a
            >
            <p class="tg">Dapatkan Solusi yang tepat dari keluhan anda</p>
          </div>

          <div class="col-md-4">
            <a href="kamus.html">
              <span class="lingkaran"><i class="fas fa-book fa-5x"></i></span>
              <h3 class="mt-3 laya">Repository</h3></a
            >
            <p class="tg">Dapatkan Referensi dan lihat stuktur tumbuhan dari banyak peneliti</p>
          </div>

          <div class="col-md-4">
            <a href="login.html">
              <span class="lingkaran"><i class="fas fa-upload fa-5x"></i></span>
              <h3 class="mt-3 laya">Publikasi</h3></a
            >
            <p class="tg">Bagikan Hasil penelitian Anda Untuk Dapat Bermanfaat Ke orang Banyak</p>
          </div>
        </div>
      </div>
    </div>
    <!-- penelitian terbaru -->
    <div class="container-fluid pt-3 pb-3 bg-light">
      <div class="container text-start">
        <h6>Penelitian Terbaru</h6>
        <div class="row pt-4 gx3 gy-3">
          <div class="col-md-3">
            <div class="card" style="width: 18rem; height: auto">
              <img src="jahe-merah.png" class="card-img-top" width="200" height="200" alt="Jahe Merah" />
              <div class="card-body">
                <h5 class="card-title">Jahe Merah</h5>
                <p class="card-text">
                  Penelitian ini membuktikan bahwa ekstrak etanol jahe merah (Zingiber officinale Var. Amarum) pada konsentrasi 0,6 % b/v memiliki kemampuan paling baik untuk menurunkan kadar asam
                  urat
                </p>
                <a href="#" class="link">Selengkapnya</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card" style="width: 18rem; height: auto">
              <img src="daun-sirsak.png" class="card-img-top" width="200" height="200" alt="sirsak" />
              <div class="card-body">
                <h5 class="card-title">Daun Sirsak</h5>
                <p class="card-text">
                  Sirsak (Annona muricata Linn) adalah tanaman yang mudah tumbuh di banyak tempat. Nama sirsak berasal dari bahasa Belanda yaitu Zuurzak yang berarti kantung yang asam
                </p>
                <a href="#" class="link">Selengkapnya</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card" style="width: 18rem; height: auto">
              <img src="kunyit.png" class="card-img-top" width="200" height="200" alt="Jahe Merah" />
              <div class="card-body">
                <h5 class="card-title">kunyit</h5>
                <p class="card-text">
                  Kunyit mempunyai khasiat sebagai jamu dan obat tradisonal untuk berbagai jenis penyakit. senyawa yang terkandung dalam kunyit berperan sebagai obat dan antioksidan
                </p>
                <a href="#" class="link">Selengkapnya</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card" style="width: 18rem; height: auto">
              <img src="lidah-buaya.png" class="card-img-top" width="200" height="200" alt="Jahe Merah" />
              <div class="card-body">
                <h5 class="card-title">Lidah Buaya</h5>
                <p class="card-text">
                  Lidah Buaya Dapat Mengobati wasir, menyembuhkan luka, mengobati bisul, mengobati ketobe, menjadi sunblock, mencegah penuaan dini, mengurangi bekas stretch mark.
                </p>
                <a href="#" class="link">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- tentang -->
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container">
        <h2 class="text-center konsul" id="tentang">TENTANG</h2>
        <p class="text-center">Nature Health adalah website untuk melihat struktur tanaman yang dapat digunakan oleh masyarakat dan peneliti</p>
        <div class="clearfix pt-5">
          <img src="logo2.png" class="col-md-6 float-md-end mb-3" height="100px" width="auto" />
          <p>
            Nature Health adalah website yang dapat anda gunakan untuk melihat struktur manfaat yang terkandung dalam tanaman, anda juga dapat berkonsultasi menggenai penyakit yang umum dijumpai. Anda
            juga dapat membagikan hasil penelitian anda disini untuk dilihat oleh orang lain.
          </p>
        </div>
      </div>
    </div>
    <!-- kontak -->
    <div class="container-fluid pt-5 pb-5 about">
      <div class="container">
        <h3 class="kontak">Kontak Kami</h3>
        <p class="">Hubungi kami jika ada masukan dan saran</p>
        <form>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Saran atau Masukan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-success">Kirim</button>
        </form>
      </div>
    </div>
    <div class="container-fluid pt-3 pb-3 text-center bg-light">All for good &copy; 2022</div>
    <script>
      src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js";
      integrity = "sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM";
      crossorigin = "anonymous";
    </script>
  </body>
</html>

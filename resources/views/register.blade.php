<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
    <title>Daftar Dan Masuk</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success pt-2 pb-2">
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
              <a class="nav-link active" aria-current="page" href="home.html" style="font-size: larger">Home</a>
            </li>
            <li class="nav-item">
              <button type="button" class="btn btn-outline-dark"><a class="nav-link" href="/login" style="align-self: start">Login</a></button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- daftar -->
    <div class="container">
      <div class="box">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <h2 class="akun text-center pt-5 pb-5">Buat Akun</h2>
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <div class="col-md-6">
            <label for="NamaDepan" class="form-label">Nama Depan</label>
            <input name="name" type="email" class="form-control" id="NamaDepan" placeholder="abd" />
          </div>
          <div class="col-md-6">
            <label for="iNamaBelakang" class="form-label">Nama Belakang</label>
            <input name="last_name" type="password" class="form-control" id="NamaBelakang" placeholder="Latif" />
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="example@gmail.com" />
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="inputPassword4" />
          </div>
          <div class="col-md-6">
            <label for="inputPassword2" class="form-label">Ulangi Password</label>
            <input name="password_confirmation" type="password" class="form-control" id="inputPassword2" />
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Alamat</label>
            <input name="address" type="text" class="form-control" id="inputAddress" placeholder="Jl.example" />
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Institusi</label>
            <input name="institution" type="text" class="form-control" id="inputAddress2" placeholder="Institusi atau kantor" />
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">Nomer Ponsel</label>
            <input name="phone" type="text" class="form-control" id="inputCity" placeholder="088xxxxxx" />
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">Pos</label>
            <input name="postal_code" type="text" class="form-control" id="inputZip" />
          </div>
          <div class="col-md-6">
            <label for="formFile" class="form-label">Kartu Identitas</label>
            <input name="image" class="form-control" type="file" id="formFile" />
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck" />
              <label class="form-check-label" for="gridCheck"> Data Diatas Benar </label>
            </div>
          </div>
          <div class="col-12">
            <button type="clear" class="btn btn-outline-warning">Bersihkan</button>
            <button type="submit" class="btn btn-success">Daftar</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>

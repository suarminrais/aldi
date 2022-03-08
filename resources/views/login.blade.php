<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!--stle css-->
    <link rel="stylesheet" href="style.css" />

    <title>Login</title>
  </head>  
  <body class="login">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparant pt-5 pb-5 ">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="gambar/logo3.png" alt="" width="80" height="80" class="d-inline-block align-text-top" style="border-color:rgb(255, 255, 255);" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="/" style="font-size: larger">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active"aria-current="page"  href="/login" style="font-size: larger">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="box">
        <div class="row contentForm">
          <div class="col-sm-12 col-md-6 col-lg-6">
            <img src="i.login.svg" alt="gambar login" class="img-fluid" width="500">
          </div>

          <div class="col-sm-12 col-md-6 col-lg-6">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <h3>Selamat Datang</h3>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input name="email" value="{{old('email')}}" placeholder="Masukkan email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" placeholder="Masukkan Password" type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3 form-check">
                <input name="remember" value="{{old('remember')}}" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
              </div>
              <button type="submit" class="btn btn-primary w-100">Login</button>
              <a class="nav-link text-center" href="/register">Buat Akun</a>
            </form>
          </div>
        </div>
    </div>
  </body>
</html>

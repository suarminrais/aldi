<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- link bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!--stle css-->
    <link rel="stylesheet" href="style.css" />
    <style>
      h5.card-title{
        color: black;
      }

      p.card-text{
        color: black;
      }
    </style>
    <title>Konsultasi</title>
  </head>
  <body class="konsultasi">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparant pb-5">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="/logo1.png" alt="" width="80" height="80" class="d-inline-block align-text-top" />
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
              @if(Auth::check())
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <a class="nav-link" style="font-size: larger; cursor:pointer;" onclick="event.preventDefault();this.closest('form').submit();">Log Out</a>
              </form>
              @else
                  <a class="nav-link" href="/login" style="font-size: larger">Login</a>
              @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- utama -->
    <div class="container-fluid pt-5 pb-5">
      <div class="container">
        <div class="shadow-lg pt-2 mb-2 bg-body rounded">
          <h3 class="text-center pb-2 sapa">Halo healti, Anda Sedang Punya Keluhan Apa ?</h3>
        </div>
        <select id="find" class="form-select shadow-lg p-2 mb-2 bg-body rounded" aria-label="Default select example">
          <option disabled selected>Silahkan pilih keluhan anda</option>
          @foreach($manfaats as $item)
          <option value="{{$item->id}}">{{$item->nama}}</option>
          @endforeach
        </select>
        <div class="row row-cols-2">
          @foreach($penelitians as $item)
          <div class="col">
            <div class="row pt-3">
              <div class="col">
                <div class="shadow-sm pt-1 mb-5 bg-body rounded">
                  <div class="card mb-3" style="max-width: 540px">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="/storage/images/{{$item->image->name}}" class="img-fluid rounded-start" alt="jahe-merah" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{$item->nama}}</h5>
                          <p class="card-text">{{$item->description}}</p>
                          <a href="/publikasi/{{$item->id}}" class="btn btn-link"> Lihat</a>
                          <a href="/storage/files/{{$item->file}}" class="btn btn-outline-success">Download</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="container pt-3 pb-3 text-center" style="color: black">All for good &copy; 2022</div>
    <script>
      src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js";
      integrity = "sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM";
      crossorigin = "anonymous";
    </script>
    <script>
      const cari = document.getElementById('find');
      cari.addEventListener("change", () => {
        window.location.replace(`/kns?q=${cari.value}`);
      });
    </script>
  </body>
</html>

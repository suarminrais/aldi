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
    <title>Repository</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success pt-2 pb-2">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="gambar/logo3.png" alt="" width="60" height="60" class="d-inline-block align-text-top" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/" style="left : auto;">Home</a>
            </li>
            @if(Auth::check() && Auth::user()->type !== 'admin')
            <li class="nav-item">
              <a class="nav-link" href="/penelitianku" style="font-size: larger">Penelitianku</a>
            </li>
            @endif
            <li class="nav-item">
              @if(Auth::check())
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <a class="nav-link btn btn-outline-dark" style="align-self: start;cursor:pointer;" onclick="event.preventDefault();this.closest('form').submit();">Log Out</a>
              </form>
              @else
                  <a class="nav-link btn btn-outline-dark" href="/login" style="align-self: start;cursor:pointer;">Login</a>
              @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- bagian utama -->
    <div class="container-fluid pt-3 pb-3">
      <div class="container kamus">
        <h3 class="kamus">Selamat Datang Di Repository Naturu Health</h3>
        <p>Lihat dan dapatkan struktur dan manfaat tanaman yang ada disekitar anda menjadi obat berkualitas tinggi</p>
        <div class="shadow pt-3 mb-1 bg-body rounded">
          <div class="input-group mb-3">
            <input id="find" type="text" class="form-control" placeholder="Cari disini" aria-label="Cari disini" aria-describedby="button-addon2" />
            <button class="btn btn-outline-secondary" type="button" id="cari">Cari</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="container">
        <div class="container">
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
                          <div class="card-body h-100">
                            <h5 class="card-title">{{$item->nama}}</h5>
                            <p class="card-text">{{strlen(strip_tags($item->description)) > 150 ? substr(strip_tags($item->description), 0,150).'...' : strip_tags($item->description)}}</p>
                            <p class="card-text"><small class="text-muted">Last updated {{date('l', strtotime($item->updated_at))}}</small></p>
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
    </div>
  </body>
  <script>
    const cari = document.getElementById('cari');
    cari.addEventListener("click", () => {
      const find = document.getElementById('find');
      window.location.replace(`/kamus?q=${find.value}`);
    });
  </script>
</html>

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
    <title>Lihat Penelitian</title>
  </head>
  <body>
    <div class="container">
      <a href="/">
        <button type="button" class="btn-close pt-5" aria-label="Close"></button>
      </a>
      <h3 class="judul pt-5 pb-5" style="font-family: serif bold;">{{$penelitian->nama}}</h3>
      <div class="row">
        <div class="col">
            <div class="box">
                <img src="/storage/images/{{$penelitian->image->name}}" class="rounded float-start" alt="gambar jahe" width="400">
            </div>
        </div>
        <div class="col">
          <table class="table caption-top">
            <caption>
              Struktur Manfaat Tumbuhan / Tanaman
            </caption>
            <thead>
              <tr>
                <th scope="col">Struktur Manfaat</th>
                <th scope="col">Kadar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($penelitian->strukturs as $item)
              <tr>
                <th scope="row">{{$item->struktur}}</th>
                <td>{{$item->kadar}}</td>
              <tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <h5>{{$penelitian->nama}}</h5>
       <p>{{$penelitian->description}}</p>
          <div class="card-footer">
            <small class="text-muted">Oleh {{$penelitian->user->name}}</small><br>
            <small class="text-muted">DiPublikasi 17 April 2021</small>
          </div>
          <a href="/storage/files/{{$penelitian->file}}" class="btn btn-success btn-sm">Download</a>
    </div>
    <div class="container-fluid pt-3 pb-3 text-center bg-light">All for good &copy; 2022</div>
  </body>
</html>

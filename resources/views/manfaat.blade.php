<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
     crossorigin="anonymous"
   />

    <title>admin</title>
</head>
<body>
    <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success pt-2 pb-2">
         <div class="container">
           <a class="navbar-brand" href="#">
             <img src="gambar/logo3.png" alt="" width="50" height="50" class="d-inline-block align-text-top" />
           </a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav ms-auto">
               <li class="nav-item">
                 <a class="nav-link" aria-current="page" href="/" style="left: auto;">Home</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" aria-current="page" href="/admin" style=" left: auto;">Publikasi</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="#" style=" left: auto;">Master Data</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" aria-current="page" href="/masukan" style=" left: auto;">Saran</a>
               </li>
               <li class="nav-item">
                @if(Auth::check())
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <a class="nav-link" style=" left: auto; cursor:pointer;" onclick="event.preventDefault();this.closest('form').submit();">Log Out</a>
                </form>
                @else
                    <a class="nav-link" href="/login" style=" left: auto;">Login</a>
                @endif
               </li>
             </ul>
           </div>
         </div>
       </nav>
       <div class="container-fluid pt-5 pb-1">
         <div class="container">
           <h3 class="admin">Selamat Datang Admin</h3>
           <table class="table caption-top">
             <caption>
               Daftar Manfaat Untuk Kesehatan
             </caption>
             <thead>
               <tr>
                 <th scope="col">No</th>
                 <th scope="col">Manfaat Tumbuhan</th>
                 <th scope="col">Konfirmasi</th>
               </tr>
             </thead>
             <tbody>
               @foreach($manfaats as $item)
               <tr>
                 <th scope="row">{{$item->id}}</th>
                 <td>{{$item->nama}}</td>
                 <td>
                    <form method="POST" action="/manfaat/{{$item->id}}">
                        @csrf
                        <button type="submit" class="btn btn-outline-warning btn-sm">HAPUS</button>
                    </form>
                 </td>
               </tr>
               @endforeach
             </tbody>
           </table>
            <div>
            <h5 class="text pt-3">Tambahkan Manfaat</h5>
            <div class="box">
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form method="POST" action="/manfaat">
                    @csrf
                    <div class="col-12 pb-1">
                        <label for="NamaManfaat" class="form-label">Masukkan Manfaat : </label>
                        <input name="nama" type="text" class="form-control" id="Namamanfaat" placeholder="contoh : influenza" /><br>
                        <button type="submit" class="btn btn-success btn-sm">Kirim</button>
                    </div>
                </form>
         </div>
       </div>
</body>
</html>
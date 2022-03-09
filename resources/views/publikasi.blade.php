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
    <title>upload</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="container">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="post" enctype="multipart/form-data" action="/publikasi">
        @csrf
        <a href="/">
          <button type="button" class="btn-close pt-5" aria-label="Close"></button>
        </a>
        <h2 class="text-center">Silahkan Lengkapi Data Dibawah</h2>
        <p class="text-center">Isilah data dengan benar dan tepat</p>
        <div class="box">
            <div class="col-12 pb-1">
              <label for="NamaPenelitian" class="form-label">Nama Penelitian</label>
              <input name="nama" value="{{old('nama')}}" type="text" class="form-control" id="NamaPenelitian" placeholder="contoh : Akar Alang-Alang" />
            </div>
            <div class="col-12 pb-1">
              <label for="KategoriPenelitian" class="form-label">Kategori Penelitian</label>
              <input name="kategori" value="{{old('kategori')}}" type="text" class="form-control" id="Kategorienelitian" placeholder="contoh : tumbuhan" />
            </div>
            <div class="col-12 pb-3">
              <label for="Tberkembang" class="form-label">Tempat Berkembang Biak</label>
              <input name="tempat" value="{{old('tempat')}}" type="text" class="form-control" id="Tberkembang" />
            </div>
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
              <p>Pilih Manfaat Dari Hasil Penelitian :</p>

              @foreach($manfaats as $data)
              <div class="col">
                <div class="p-3 border bg-light">
                  <div class="col-12 form-check">
                    <input name="manfaat[]" class="form-check-input" type="checkbox" value="{{$data->id}}" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault"> {{$data->nama}} </label>
                  </div>
                </div>
              </div>
              @endforeach
              <div class="col-12 pb-1">
                <div class="row">
                  <label for="exampleFormControlTextarea1" class="form-label">Struktur Manfaat Yang Terkandung</label>
                  <div class="col">
                    <a id="tambahStruktur" class="btn my-2 btn-success">Tambah</a>
                  </div>
                </div>
                <div id="strukturIsi">
                  <div class="row">
                    <div class="col">
                      <input type="text" required name="struktur[]" class="form-control" placeholder="Struktur Manfaat" aria-label="manfaat">
                    </div>
                    <div class="col">
                      <input type="text" required  name="kadar[]" class="form-control" placeholder="kadar" aria-label="kadar">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 pb-2">
                <label for="exampleFormControlTextarea1" class="form-label">Penjelasan Dari Penelitian anda</label>
                <textarea name="description" value="{{old('description')}}" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="akar alang alang banyak ditemukan..."></textarea>
              </div>
              <div class="col-12 pb-2">
                <label for="formFileMultiple" class="form-label">Silahkan Masukkan Gambar Terkait</label>
                <input name="image" class="form-control" type="file" id="formFileMultiple" accept="image/*">
              </div>
              <div class="col-12 pb-2">
                <label for="formFileMultiple" class="form-label">Silahkan Masukkan File Terkait</label>
                <input name="dokumen" class="form-control" type="file" id="formFileMultiple">
              </div>
              <div>
              <label class="form-check-label" for="flexCheckDefault"> Apakah Hasil penelitin Benar ? </label>
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
            </div>  
          </div>
        </div>
        <button type="clear" class="btn btn-outline-warning">Bersihkan</button>
        <button type="submit" class="btn btn-success">Publikasi</button>  
      </form>
    </div>
    <div class="container-fluid pt-3 pb-3 text-center bg-light">All for good &copy; 2022</div>
  </body>
  <script>
    const tambah = document.getElementById('tambahStruktur');
    tambah.addEventListener("click", tambahStrukturRow);
    function tambahStrukturRow() {
      document.getElementById("strukturIsi").innerHTML += `<div class="row">
        <div class="col">
          <input type="text" required name="struktur[]" class="form-control" placeholder="Struktur Manfaat" aria-label="manfaat">
        </div>
        <div class="col">
          <input type="text" required name="kadar[]" class="form-control" placeholder="kadar" aria-label="kadar">
        </div>
      </div>`;
    }
  </script>
</html>

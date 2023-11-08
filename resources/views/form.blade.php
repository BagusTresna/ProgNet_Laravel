<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulir</title>
  <!-- FontAwesome 5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ asset('css/form.css')}}">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <div class="jumbotron">
    <div class="container py-5 w-50">
      <div class="col-md">
        <div class="card mb-4 mb-md-0">
          <div class="card-body">
            <h3 class="h2 text-black mb-3" style="text-align: center;">FORMULIR DATA DIRI</h3>
            <hr>
            <form action="/hasil_form" method="post" onsubmit="return validateForm()">
              @csrf
              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" required />
              </div>
              <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM" pattern="[0-9]{10}" title="Kolom NIM hanya bisa menerima angka dan harus terdiri dari 10 digit." required />
              </div>

              <label for="angkatan" class="form-label">Angkatan</label>
              <select id="angkatan" name="angkatan" class="form-select" aria-label="Default select example" required>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
              </select>

              <br />
              <label for="prodi" class="form-label">Program Studi</label>
              <select id="prodi" name="prodi" class="form-select" aria-label="Default select example">
                <option value="S1 Teknologi Informasi">S1 Teknologi Informasi</option>
                <option value="S1 Teknik Sipil">S1 Teknik Sipil</option>
                <option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
                <option value="S1 Teknik Mesin">S1 Teknik Mesin</option>
                <option value="S1 Teknik Arsitektur">S1 Teknik Arsitektur</option>
                <option value="S1 Teknik Lingkungan">S1 Teknik Lingkungan</option>
                <option value="S1 Teknik Industri">S1 Teknik Industri</option>
              </select>

              <br />
              <label class="form-label">Jenis Kelamin</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-Laki" required />
                <label for="laki-laki" class="form-check-label">
                  Laki-Laki
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required />
                <label for="perempuan" class="form-check-label">
                  Perempuan
                </label>
              </div>
              <br />
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Tinggal" required />
              </div>
              <div class="mb-3">
                <label class="form-label">No Telepon</label>
                <input type="tel" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon" pattern="[0-9]+" title="No Telepon hanya bisa menerima angka" required />
              </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
              </div>
              <br />
              <button type="submit" name="create" class="btn btn-primary" target="_blank">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity = "sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin = "anonymous"
  </script>
  <script src="{{ asset('js/validasi.js')}}"></script>
</body>

</html>
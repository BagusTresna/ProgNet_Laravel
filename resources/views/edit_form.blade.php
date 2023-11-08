<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir</title>
    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>

<body>
    <div class="jumbotron">
        <div class="container py-5 w-50">
            <div class="col-md">
                <div class="card mb-4 mb-md-0">
                    <div class="card-body">
                        <h3 class="h2 text-black mb-3" style="text-align: center;">Edit Data</h3>
                        <h1>Edit Formulir</h1>
                        <form action="{{ route('hasil_form.update', $form->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ $form->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="text" class="form-control" id="nim" name="nim"
                                    value="{{ $form->nim }}" readonly>
                            </div>
                            <label for="angkatan" class="form-label">Angkatan</label>
                            <select class="mb-3 form-select" id="angkatan" name="angkatan">
                                <option selected hidden>{{ $form->angkatan }}</option>
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
                            <label for="prodi" class="form-label">Program Studi</label>
                            <select class="mb-3 form-select" id="prodi" name="prodi">
                                <option selected hidden>{{ $form->program_studi }}</option>
                                <option value="Teknologi Informasi">Teknologi Informasi</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Sipil">Teknik Sipil</option>
                            </select>
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki"
                                    value="Laki-Laki" <?php if ($form['jenis_kelamin'] == 'Laki-Laki') {
                                        echo 'checked';
                                    } ?>>
                                <label class="form-check-label" for="laki-laki">Laki - Laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                                    value="Perempuan" <?php if ($form['jenis_kelamin'] == 'Perempuan') {
                                        echo 'checked';
                                    } ?>>
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    value="{{ $form->alamat }}">
                            </div>
                            <div class="mb-3">
                                <label for="no_telp" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp"
                                    value="{{ $form->no_telp }}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    aria-describedby="emailHelp" value="{{ $form->email }}">
                            </div>
                            <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
                            <br>
                            <a href="/hasil_form" class="btn btn-secondary card-link mt-3">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

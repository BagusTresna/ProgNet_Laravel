<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Formulir</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="validasi.js"></script>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <div class="jumbotron" style="min-height: 50rem;">
        <div class="container py-5 w-50">
            <div class="col-md">
                <div class="card mb-4 mb-md-0">
                    <div class="card-body">
                        <h3 class="h2 text-black mb-3" style="text-align: center;">DATA DIRI MAHASISWA</h3>
                        <hr>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($data as $form)
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $form->nama }}</td>
                                        <td>{{ $form->nim }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" name="input"
                                                data-bs-toggle="modal"
                                                data-bs-target="#detailModal{{ $form->nim }}">Detail</button>
                                            <form action="hasil_form/{{ $form->id }}/edit" method="get">
                                            <button type="submit" class="btn btn-warning" name="input">Edit</button>
                                            </form>
                                            <button type="button" class="btn btn-danger" name="input"
                                                data-bs-toggle="modal"
                                                data-bs-target="#hapusModal{{ $form->nim }}">Hapus</button>
                                        </td>

                                </tr>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="detailModal{{ $form->nim }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Nama</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    value="{{ $form->nama }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">NIM</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    value="{{ $form->nim }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Angkatan</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    value="{{ $form->angkatan }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Program Studi</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    value="{{ $form->program_studi }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Jenis Kelamin</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    value="{{ $form->jenis_kelamin }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Alamat</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    value="{{ $form->alamat }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">No Telepon</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    value="{{ $form->no_telp }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Email</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    value="{{ $form->email }}" readonly>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="hapusModal{{ $form->nim }}" tabindex="-1"
                aria-labelledby="hapusModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="hapusModalLabel">PERHATIAN!!!</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="/hasil_form/{{ $form->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                <h3>Apakah Anda Yakin Ingin Menghapus
                                    {{ $form->nama }}?
                                </h3>
                                <input type="hidden" value="{{ $form->nim }}" name="nim">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            
            ?>
            </tbody>
            @endforeach
            </table>
            <a href="/" class="btn btn-secondary card-link mt-3">Kembali</a>
        </div>
    </div>
    <script src="config/validasi.js"></script>
</body>

</html>

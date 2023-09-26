<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membuat CRUD menggunakan Laravel PHp dan MySQL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="margin: 3%;">
                    <div class="card-header bg-success text-white"><h5>Tambah Jadwal</h5></div>
                    <div class="card-body">
                        <form action="{{route('jadwal.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama_siswa" class="form-control @error('nama_siswa') is-invalid @enderror">
                                @error('nama_siswa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <br>
                            <label for="">Masukan Kelas</label>
                                 <select class="form-select" aria-label="Default select example" name="kelas" id="" >
                                    <option selected>Pilih Kelas</option>
                                   <option>X-RPL</option>
                                   <option>X-TKJ</option>
                                   <option>X-DKV</option>
                                   <option>X-HR</option>
                                   <option>X-OTKP</option>
                                   <option>X-TBSM</option>
                                   <option>X-TKRO</option>
                                   <option>X-TP</option>
                                   <option>X-TITL</option>
                                   <option>XI-RPL</option>
                                   <option>XI-TKJ</option>
                                   <option>XI-DKV</option>
                                   <option>XI-HR</option>
                                   <option>XI-OTKP</option>
                                   <option>XI-TBSM</option>
                                   <option>XI-TKRO</option>
                                   <option>XI-TP</option>
                                   <option>XI-TITL</option>
                                   <option>XII-RPL</option>
                                   <option>XII-TKJ</option>
                                   <option>XII-DKV</option>
                                   <option>XII-HR</option>
                                   <option>XII-OTKP</option>
                                   <option>XII-TBSM</option>
                                   <option>XII-TKRO</option>
                                   <option>XII-TP</option>
                                   <option>XII-TITL</option>
                                   <option>XIII-HR</option>
                                </select>
                            <br>
                            <label for="">Masukan Tanggal</label>
                            <input type="date" name="tgl" class="form-control @error('tgl') is-invalid @enderror" placeholder="Masukkan Tangal">
                            @error('tgl')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                            <label for="">Masukkan Data Hadir</label>
                                 <select class="form-select" aria-label="Default select example" name="hadir" id="" >
                                    <option selected>Pilih Kehadiran</option>
                                   <option>Hadir</option>
                                   <option>--</option>
                                 </select>
                                 <br>
                                 <div class="form-group">
                                    <label for="">Masukkan Data Izin</label>
                                    <input type="text" name="izin" class="form-control @error('izin') is-invalid @enderror" placeholder="Masukkan data Izin beserta Alasannya, jika tidak ada izin ketik --">
                                    @error('izin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <br>
                                <label for="">Masukkan Data Sakit</label>
                                 <select class="form-select" aria-label="Default select example" name="sakit" id="" >
                                    <option selected>Pilih Data</option>
                                   <option>Sakit</option>
                                   <option>--</option>
                                 </select>
                                 <br>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
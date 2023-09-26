<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Absensi dan Presensi Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Absensi dan Presensi</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
      <br>
      <br>
      <br>
      <br>
      <div class="container">
        <div class="card">
            <div class="card-header text-primary">
                <h5>Data Absensi dan Presensi Siswa</h5>
                <br>
                <form action="{{ route('jadwal.cari') }}" class="row" method="GET" style="">
                    <div class="col col-sm-2">
                    <input type="text" class="form-control" style="width: 210px" name="cari" placeholder="Cari Data" value="{{ old('cari') }}" >
                    </div>
                    <div class="col">
                    <input type="submit" value="Cari" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Tanggal</th>
                        <th>Hadir</th>
                        <th>Izin</th>
                        <th>Sakit</th>
                        <th>Aksi</th>
                    </tr>
                    @php $no=1 @endphp
                    @foreach ($jadwal as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->nama_siswa}}</td>
                        <td>{{$item->kelas}}</td>
                        <td>{{$item->tgl}}</td>
                        <td>{{$item->hadir}}</td>
                        <td>{{$item->izin}}</td>
                        <td>{{$item->sakit}}</td>
                        <td>
                            <form action="{{route('jadwal.destroy',$item->id)}}" method="jadwal">
                                @method('delete')
                                @csrf
                                <a href="{{route('jadwal.edit',$item->id)}}" class="btn btn-info">Edit</a>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
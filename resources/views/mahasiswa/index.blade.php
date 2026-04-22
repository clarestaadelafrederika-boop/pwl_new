<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
<body class="text-bg-secondary">
    <a href="{{ action([App\Http\Controllers\MahasiswaController::class, 'create']) }}" >
        <input type="button" value="Create">
    </a>
    <table class="table table-dark table-striped">
        <thead>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>NIM</th>
            <th>NIDN</th>
            <th>Tempat/Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Tanggal Pembuatan</th>
            <th></th>
        </thead>
        @foreach ($mahasiswa as $m)
        <tr>
            <td>{{$m->id}}</td>
            <td>{{$m->fullname}}</td>
            <td>{{$m->NIM}}</td>
            <td>{{$m->NIDN}}</td>
            <td>{{$m->tempat_lahir}},{{$m->tanggal_lahir}}</td>
            <td>{{$m->alamat}}</td>
            <td>{{$m->created_at}}</td>
            <td>
                <a href="{{ action([App\Http\Controllers\MahasiswaController::class, 'edit'], [$m->id]) }}" >
                    <input type="button" value="Edit">
                </a>
                <form action="{{ action([App\Http\Controllers\MahasiswaController::class, 'destroy'], [$m->id]) }}"  method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
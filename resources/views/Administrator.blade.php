@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <form action="{{ url('administrator/cari') }}" method="get">
        @csrf
        <input type="search" name="cari" id="cari">
        <input type="submit" value="cari" class="mb-3 mt-3">
    </form>
    <a href="{{ url('administrator/add') }}"><button class="btn btn-primary btn-sm mt-3">Tambah Data</button></a>
    <table class="table table-bordered text-center mt-3">
        <tr>
            <th>No</th>
            <th>Id Admin</th>
            <th>Nama Admin</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        @foreach ($administrator as $key => $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->id_adm }}</td>
                <td>{{ $item->nama_admin }}</td>
                <td>{{ $item->jk=='L'?'Laki-laki':'Perempuan' }}</td>
                <td>{{ $item->alamat }}</td>
                <td>
                    <a href="administrator/hapus/{{ $item->id_adm }}" onclick="return window.confirm('hapus data ini?')" class="btn btn-danger">Hapus</a>
                    <a href="administrator/edit/{{ $item->id_adm }}" onclick="return window.confirm('edit data ini?')" class="btn btn-success">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas</title>
</head>
<body>
    <a href="{{ route('kelas.create') }}">Tambah Kelas</a>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kelas</th>
            <th colspan="2">Aksi</th>
        </tr>
        @php $no =1; @endphp
        @foreach($kelas as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->kelas }}</td>
                <td><a href="{{ route('kelas.edit',$data->id) }}">Edit</a></td>
                <td>
                    <form method="post" action="{{ route('kelas.destroy',$data->id) }}">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" value="Hapus">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
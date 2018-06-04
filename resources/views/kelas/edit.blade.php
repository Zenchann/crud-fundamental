<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Data Kelas</title>
</head>
<body>
    <table>
        <form action="{{ route('kelas.update',$kelas->id) }}" method="post">
                <input name="_method" type="hidden" value="PATCH">
            {{ csrf_field() }}
        <tr>
            <th>
                <label for="kelas">Kelas</label>
            </th>
            <td>
                <input type="text" value="{{ $kelas->kelas }}" name="kelas">
            </td>
        </tr>
        <tr>
            <th>
            </th>
            <td>
                <input type="submit" value="edit">
            </td>
        </tr>
        </form>
    </table>
</body>
</html>
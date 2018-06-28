<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data" multiple>
        @csrf
        <input type="file" name="files[]" id="" multiple>
        <button type="submit">Save</button>
    </form>
    @foreach($file as $data)
    <a href="{{ asset('/assets/img/filesiswa/'.$data->files) }}">{{ $data->files }}</a><br>
    @endforeach
</body>
</html>
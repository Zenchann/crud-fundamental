@extends('layouts.admin')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row m-t-30">
            <div class="col-md-12">
                <div class="m-b-10">
                    <a href="{{ route('artikel.create') }}" class="btn btn-outline-danger">
                        <i class="fa fa-pencil-square-o"></i>    
                        Tambah Data
                    </a>
                    
                </div>
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Slug</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no =1; @endphp
                        @foreach($artikel as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->judul }}</td>
                                <td>{{ $data->slug }}</td>
                                <td><a href="{{ route('artikel.edit',$data->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('artikel.edit',$data->id) }}" class="btn btn-danger">Delete</a>
                                @if($data->status == 1)
                                <form action="{{ route('artikel.publish',$data->id) }}" method="post">
                                    @csrf
                                <button type="submit" class="btn btn-warning">unPublish</button>
                                </form>
                                @elseif($data->publish == 0)
                                <form action="{{ route('artikel.publish',$data->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-info" type="submit">Publish</button>
                                </form>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>
        
    </div>
</div>

@endsection

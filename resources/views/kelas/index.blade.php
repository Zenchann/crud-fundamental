@extends('layouts.admin')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row m-t-30">
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                @php $no =1; @endphp
                                @foreach($kelas as $data)
                                @if($data->status == 0)
                                @elseif($data->status == 1)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->kelas }}</td>
                                <td><a href="{{ route('kelass.edit',$data->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('kelass.edit',$data->id) }}" class="btn btn-danger">Delete</a></td>
                            </tr>
                            @endif
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
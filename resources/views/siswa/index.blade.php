@extends('layouts.admin')
@section('css')
<link href="{{ asset('/assets/admin/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@endsection
@section('js')
<script src="{{ asset('/assets/admin/datatable/js/jquery.dataTables.min.js')}}"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row m-t-30">
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table id="example" class="table display table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIS</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                @php $no =1; @endphp
                                @foreach($siswa as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->nis }}</td>
                                <td><a href="{{ route('siswa.edit',$data->id) }}" class="btn btn-primary">Edit</a>
                                
                                <a href="{{ route('siswa.edit',$data->id) }}" class="btn btn-danger">Delete</a></td>
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
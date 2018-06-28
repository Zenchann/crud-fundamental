@extends('layouts.app')
@section('css')

@endsection
@section('content')
<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Blog</h1>
		</div>
	</div>

    @foreach ($artikel as $data)
    @if($data->status == 0)
    @else
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>{{ $data->judul }}</h2>
            <h5>Published: {{ date('M j, Y', strtotime($data->created_at)) }}</h5>
            <h5>Penulis : {{ $data->User->name }}</h5>
            <p>{!! str_limit($data->konten,1000) !!}</p>

            <a href="{{ route('singleblog',$data->id) }}" class="btn btn-primary">Read More</a>
            <hr>
        </div>
    </div>
    @endif
	@endforeach

	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				{!! $artikel->links() !!}
			</div>
		</div>
	</div>
@endsection
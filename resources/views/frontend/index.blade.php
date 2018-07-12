@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <h2 class="mb-4">Berita</h2>
        </div>
    </div>
    <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
        <div class="row">
            @foreach($artikel as $data)
                <div class="col-md-6">
                    <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                        <img src="{{ asset('assets/img/fotoartikel/'.$data->foto)}}" alt="Image placeholder">
                        <div class="blog-content-body">
                        <div class="post-meta">
                            <span class="category">{{ $data->Kategori->nama_kategori }}</span>
                            <span class="mr-2">{{ $data->created_at->diffForHumans() }} </span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                        </div>
                        <h2>{{ $data->judul }}</h2>
                        </div>
                    </a>
                </div>
            @endforeach
            <a href="{{ url('blog') }}" class="btn btn-primary btn-lg">Lihat Semua Berita</a>
        </div>
        </div>


    
    
    </div>
</div>
@endsection
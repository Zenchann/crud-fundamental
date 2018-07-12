@extends('layouts.frontend')
@section('css')

@endsection
@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-6">
        <h2 class="mb-4">Category: Food</h2>
        </div>
    </div>
    <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
        <div class="row mb-5 mt-5">

            <div class="col-md-12">
            @foreach($artikel as $data)
            <div class="post-entry-horzontal">
                <a href="#">
                <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url(/assets/img/fotoartikel/{{ $data->foto }});"></div>
                <span class="text">
                    <div class="post-meta">
                    <span class="category">{{ $data->Kategori->nama_kategori }}</span>
                    <span class="mr-2">{{ $data->created_at->diffForHumans() }} </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>{{ $data->judul }}</h2>
                </span>
                </a>
            </div>
            @endforeach
            <!-- END post -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
            <nav aria-label="Page navigation" class="text-center">
                <ul class="pagination">
                <li class="page-item  active"><a class="page-link" href="#">Prev</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
            </div>
        </div>

        

        </div>

        <!-- END main-content -->

    </div>
</div>
@endsection
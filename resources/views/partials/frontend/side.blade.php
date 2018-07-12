<!-- END main-content -->
<div class="col-md-12 col-lg-4 sidebar">
        <div class="sidebar-box search-form-wrap">
            <form action="#" class="search-form">
            <div class="form-group">
                <span class="icon fa fa-search"></span>
                <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
            </div>
            </form>
        </div>
        <!-- END sidebar-box -->
        <div class="sidebar-box">
            <div class="bio text-center">
            <img src="{{ asset('assets/frontend/images/person_1.jpg')}}" alt="Image Placeholder" class="img-fluid">
            <div class="bio-body">
                <h2>Ujang Simpati</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                <p><a href="#" class="btn btn-primary btn-sm">Read my bio</a></p>
                <p class="social">
                <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                </p>
            </div>
            </div>
        </div>
        <!-- END sidebar-box -->  
        <!-- END sidebar-box -->

        <div class="sidebar-box">
            <h3 class="heading">Kategori</h3>
            <ul class="categories">
                @php $kategori = \App\Kategori::all(); @endphp
            @foreach($kategori as $data)
            <li><a href="#">{{ $data->nama_kategori }} <span>1</span></a></li>
            @endforeach    
            </ul>
        </div>
        <!-- END sidebar-box -->
        </div>
        <!-- END sidebar -->
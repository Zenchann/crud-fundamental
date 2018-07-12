@extends('layouts.frontend')
@section('content')
<div class="container">
<div class="row blog-entries">
    <div class="col-md-12 col-lg-8 main-content">
        <h1 class="mb-4">{{ $artikel->judul }}</h1>
        <div class="col-md-12 mb-4 element-animate">
                <img src="/assets/img/fotoartikel/{{ $artikel->foto }}" alt="Image placeholder" class="img-fluid">
            </div>
        <div class="post-meta">
                    <span class="category">{{ $artikel->Kategori->nama_kategori }}</span>
                    <span class="mr-2">{{ $artikel->created_at->diffForHumans() }} </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
        <div class="post-content-body">
        <p>{!! $artikel->konten !!}</p>
        </div>

        
        <div class="pt-5">
        <p>Categories:  <a href="#">{{ $artikel->Kategori->nama_kategori }}</a></p>
        </div>
    </div>

      </div>
      <div id="disqus_thread"></div>
    </div>

@push('scripts')
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://pkl-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
@endpush
@endsection
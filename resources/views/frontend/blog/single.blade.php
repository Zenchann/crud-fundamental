@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>{{ $artikel->judul }}</h1>
        <h5>Published: {{ date('M j, Y', strtotime($artikel->created_at)) }}</h5>
        <h5>Penulis : {{ $artikel->User->name }}</h5>
        <p>Kategori: {{ $artikel->Kategori->nama_kategori }}</p>
        <img src="{{ asset('assets/img/fotoartikel/'.$artikel->foto.'') }}" style="width=100px; height=250x;" alt="">
        <p>{!! $artikel->konten !!}</p>
        <hr>
    </div>
</div>
<div id="disqus_thread"></div>
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
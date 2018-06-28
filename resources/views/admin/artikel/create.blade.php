@extends('layouts.admin')
@section('js')
<script src="{{ asset('assets/tinymce/js/tinymce/tinymce.js') }}"></script>
<script type="text/javascript">
    tinymce.init({
  selector: 'textarea',
  height: 300,
  theme: 'modern',
  plugins: 'print preview fullpage  searchreplace autolink directionality  visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount   imagetools  contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
 
</script>
@endsection
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Create Data Siswa</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">Siswa</h3>
                        </div>
                        <hr>
                        <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Judul Artikel</label>
                                <input id="cc-pament" name="judul" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                            </div>
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Konten Artikel</label>
                                <textarea name="konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Kategori</label>
                                <select class="form-control" name="kategori_id" id="" required>
                                    @foreach($kategori as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                    @endforeach()
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Foto</label>
                                <input name="foto" type="file" required>
                            </div>
                            {{-- <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Keterengan : </label>
                                Publish <input name="publish" type="radio" value="1" required>
                                Jangan Publish <input name="publish" type="radio" value="0" required>
                            </div> --}}
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-primary"> 
                                    <i class="fa fa-check-circle fa-lg"></i>
                                    Simpan
                                </button>
                                <button type="reset" class="btn btn-outline-danger"> 
                                    <i class="fa  fa-exclamation-triangle fa-lg"></i>
                                    Batal
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


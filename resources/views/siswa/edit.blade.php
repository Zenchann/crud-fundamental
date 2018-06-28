@extends('layouts.admin')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Edit Data Siswa</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">Siswa</h3>
                        </div>
                        <hr>
                        <form action="{{ route('siswa.update',$siswa->id) }}" method="post" enctype="multipart/form-data">
                            <input name="_method" type="hidden" value="PATCH">
                            @csrf
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Nama</label>
                                <input id="cc-pament" value="{{ $siswa->nama }}" name="nama" type="text" class="form-control">
                            </div>
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">NIS</label>
                                <input id="cc-name" value="{{ $siswa->nis }}" name="nis" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                            </div>
                            <div class="form-group">
                                <label for="cc-number" class="control-label mb-1">Kelas</label>
                                <select name="kelas_id" class="form-control" id="">
                                    @foreach($kelas as $data)
                                    <option value="{{ $data->id }}" {{ $selected == $data->id ? 'selected="selected"' : '' }}>{{ $data->kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">Foto</label>
                                        <input type="file" name="foto" value="{{ $siswa->foto }}">
                                        @if (isset($siswa) && $siswa->foto)
                                            <p>
                                                <br>
                                            <img src="{{ asset('assets/img/fotosiswa/'.$siswa->foto) }}" style="width:100px; height:100px;" alt="">
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                    <span id="payment-button-amount">Simpan Data</span>
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
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

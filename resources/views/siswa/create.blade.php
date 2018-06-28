@extends('layouts.admin')
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
                        <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Nama</label>
                                <input id="cc-pament" name="nama" type="text" class="form-control" aria-required="true" aria-invalid="false">
                            </div>
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">NIS</label>
                                <input id="cc-name" name="nis" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="cc-number" class="control-label mb-1">Kelas</label>
                                <select name="kelas_id" class="form-control" id="">
                                    @foreach($kelas as $data)
                                    <option value="{{ $data->id }}">{{ $data->kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">Foto</label>
                                        <input type="file" name="foto">
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

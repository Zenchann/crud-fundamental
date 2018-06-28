<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahLabel">Tambah Data Kategori <i class="fa fa-laptop"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('kategori.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Nama Kategori</label>
                                <input id="cc-pament" name="nama_kategori" type="text" class="form-control" aria-required="true" aria-invalid="false">
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-info" data-dismiss="modal"><i class="fa fa-cloud"></i> Batal</button>
                <button type="submit" class="btn btn-outline-primary"> 
                    <i class="fa fa-check"></i>
                    Simpan
                </button>
                    </form>
            </div>
        </div>
    </div>
</div>
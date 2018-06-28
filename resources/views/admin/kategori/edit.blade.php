<div class="modal fade" id="edit{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="edit{{ $data->id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Edit Data Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('kategori.update',$data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Nama Kategori</label>
                                <input id="cc-pament" value="{{ $data->nama_kategori }}" name="nama_kategori" type="text" class="form-control" aria-required="true" aria-invalid="false">
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-info" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-outline-primary"> 
                    <i class="fa fa-lock fa-lg"></i>
                    Confirm
                </button>
                    </form>
            </div>
        </div>
    </div>
</div>
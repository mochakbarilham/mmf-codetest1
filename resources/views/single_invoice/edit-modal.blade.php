<div class="modal fade" id="single-invoice-edit-modal" tabindex="-1" aria-labelledby="single-invoice-edit-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="form-edit-single-invoice">
                    <input type="hidden" id="barang-edit-form-edit-id">
                    <div class="row">
                        <div class="col-md-7 mb-3">
                            <label for="invoice-edit-form-barang" required>Barang</label>
                            <select id='invoice-edit-form-barang' style='width: 100%;'></select>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="invoice-edit-form-merk" required>Merk</label>
                            <select id='invoice-edit-form-merk' style='width: 100%;'></select>
                        </div>
                        <div class="col-md-9 mb-3">
                            <label for="barang-form-id">Jumlah</label>
                            <input type="number" class="form-control" id="invoice-edit-form-jumlah" placeholder="-" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="invoice-edit-form-satuan" required>Satuan</label>
                            <select id='invoice-edit-form-satuan' style='width: 100%;'></select>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="invoice-edit-form-batch-number" placeholder="-" required>
                                <label for="barang-form-id">Batch Number</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="datetime-local" class="form-control" id="invoice-edit-form-delivery-time" placeholder="-" required>
                                <label for="barang-form-id">Delivery Time</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="edit-save-button">Simpan</button>
            </div>
        </div>
    </div>
</div>

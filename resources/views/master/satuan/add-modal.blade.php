<div class="modal fade" id="satuan-add-modal" tabindex="-1" aria-labelledby="satuan-add-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Satuan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="form-add-satuan">
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="satuan-add-form-id" placeholder="-" required>
                            <label for="satuan-form-id">ID</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="satuan-add-form-name" placeholder="-" required>
                            <label for="satuan-form-nama">Nama Satuan</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="satuan-add-form-desc" required style="height: 150px"></textarea>
                            <label for="satuan-form-deskripsi">Deskripsi</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="add-save-button">Simpan</button>
            </div>
        </div>
    </div>
</div>

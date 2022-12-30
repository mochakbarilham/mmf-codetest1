<div class="modal fade" id="barang-edit-modal" tabindex="-1" aria-labelledby="barang-edit-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="form-edit-barang">
                    <input type="hidden" id="barang-edit-form-edit-id">
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="barang-edit-form-id" placeholder="-" required>
                            <label for="barang-form-id">ID</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="barang-edit-form-name" placeholder="-" required>
                            <label for="barang-form-nama">Nama Barang</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="barang-edit-form-desc" required style="height: 150px"></textarea>
                            <label for="barang-form-deskripsi">Deskripsi</label>
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

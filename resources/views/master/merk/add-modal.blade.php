<div class="modal fade" id="merk-add-modal" tabindex="-1" aria-labelledby="merk-add-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Merk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="form-add-merk">
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="merk-add-form-id" placeholder="-" required>
                            <label for="merk-form-id">ID</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="merk-add-form-name" placeholder="-" required>
                            <label for="merk-form-nama">Nama Merk</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="merk-add-form-desc" required style="height: 150px"></textarea>
                            <label for="merk-form-deskripsi">Deskripsi</label>
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

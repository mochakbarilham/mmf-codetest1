<script>
    $("#add-save-button" ).click(function() {
        var form = $('#form-add-barang');
        var reportValidity = form[0].reportValidity();
        if(reportValidity){
            Swal.fire({
                html: 'Anda yakin ingin menambahkan data?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Tambahkan',
                cancelButtonText: 'Batalkan'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            icon: 'info',
                            html: 'Mohon menunggu ... Data Sedang Diunggah!',
                            showConfirmButton: false,
                            allowOutsideClick: false
                        });
                        $.ajax({
                            type: "POST",
                            async: true,
                            dataType: "json",
                            url: "{{route('master.barang.store')}}",
                            data: {
                                _token  : "{{csrf_token()}}" ,
                                id      : $('#barang-add-form-id').val(),
                                name    : $('#barang-add-form-name').val(),
                                desc    : $('#barang-add-form-desc').val()
                            },
                            success: function(data){
                                if(data.code != 200){
                                    swal.fire({
                                        icon: 'error',
                                        html: data.message,
                                        showConfirmButton: false,
                                        timer: 2000
                                    })
                                }else {
                                    swal.fire({
                                        icon: 'success',
                                        html: data.message,
                                        showConfirmButton: false,
                                        timer: 2000
                                    });
                                    master_barang_datatable.ajax.reload();
                                    $('#barang-add-form-id').val(''),
                                    $('#barang-add-form-name').val(''),
                                    $('#barang-add-form-desc').val('')
                                    let modal_add_barang = bootstrap.Modal.getInstance(document.getElementById('barang-add-modal'))
                                    modal_add_barang.hide();
                                }
                            }
                        });
                    }
                })
        } else {
            swal.fire({
                icon: 'error',
                html: 'Data belum lengkap!',
                showConfirmButton: false,
                timer: 2000
            });
        }
    });
</script>

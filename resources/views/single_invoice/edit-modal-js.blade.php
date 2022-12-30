<script>
    $('#single-invoice-table tbody').on('click', '#edit-modal', function(){
        let data = single_invoice_datatable.row( $(this).parents('tr') ).data();
        console.log(data)
        $('#invoice-edit-form-jumlah').val(data.jumlah);
        $('#invoice-edit-form-batch-number').val(data.batch_number);
        $('#invoice-edit-form-delivery-time').val(data.delivery_time);
    });

    $("#edit-save-button" ).click(function() {
        var form = $('#form-edit-barang');
        var reportValidity = form[0].reportValidity();
        if(reportValidity){
            Swal.fire({
                html: 'Anda yakin ingin mengubah data?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ubah',
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
                            url: "{{route('master.barang.edit')}}",
                            data: {
                                _token      : "{{csrf_token()}}" ,
                                edit_id     : $('#barang-edit-form-edit-id').val(),
                                id          : $('#barang-edit-form-id').val(),
                                name        : $('#barang-edit-form-name').val(),
                                desc        : $('#barang-edit-form-desc').val()
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
                                    let modal_edit_barang = bootstrap.Modal.getInstance(document.getElementById('barang-edit-modal'))
                                    modal_edit_barang.hide();
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

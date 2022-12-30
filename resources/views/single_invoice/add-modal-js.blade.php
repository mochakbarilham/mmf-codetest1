<script>
    $("#add-save-button" ).click(function() {
        var form = $('#form-add-single-invoice');
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
                            url: "{{route('single-invoice.store')}}",
                            data: {
                                _token          : "{{csrf_token()}}" ,
                                barang_id       : $('#invoice-add-form-barang').val(),
                                merk_id         : $('#invoice-add-form-merk').val(),
                                satuan_id       : $('#invoice-add-form-satuan').val(),
                                jumlah          : $('#invoice-add-form-jumlah').val(),
                                batch_number    : $('#invoice-add-form-batch-number').val(),
                                delivery_time   : $('#invoice-add-form-delivery-time').val()
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
                                    single_invoice_datatable.ajax.reload();
                                    $('#invoice-add-form-barang').val(null).trigger('change');
                                    $('#invoice-add-form-merk').val(null).trigger('change');
                                    $('#invoice-add-form-satuan').val(null).trigger('change');
                                    $('#invoice-add-form-jumlah').val('')
                                    $('#invoice-add-form-batch-number').val('')
                                    $('#invoice-add-form-delivery-time').val('')
                                    let modal_single_invoce = bootstrap.Modal.getInstance(document.getElementById('single-invoice-add-modal'))
                                    modal_single_invoce.hide();
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

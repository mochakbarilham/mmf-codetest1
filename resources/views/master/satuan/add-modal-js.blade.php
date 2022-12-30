<script>
    $("#add-save-button" ).click(function() {
        var form = $('#form-add-satuan');
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
                            url: "{{route('master.satuan.store')}}",
                            data: {
                                _token  : "{{csrf_token()}}" ,
                                id      : $('#satuan-add-form-id').val(),
                                name    : $('#satuan-add-form-name').val(),
                                desc    : $('#satuan-add-form-desc').val()
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
                                    master_satuan_datatable.ajax.reload();
                                    $('#satuan-add-form-id').val(''),
                                    $('#satuan-add-form-name').val(''),
                                    $('#satuan-add-form-desc').val('')
                                    let modal_add_satuan = bootstrap.Modal.getInstance(document.getElementById('satuan-add-modal'))
                                    modal_add_satuan.hide();
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

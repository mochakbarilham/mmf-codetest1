<script>
    $('#master-satuan-table tbody').on('click', '#edit-modal', function(){
        let data = master_satuan_datatable.row( $(this).parents('tr') ).data();
        $('#satuan-edit-form-id').val(data.id);
        $('#satuan-edit-form-name').val(data.name);
        $('#satuan-edit-form-desc').val(data.desc);
        $('#satuan-edit-form-edit-id').val(data.id);
    });

    $("#edit-save-button" ).click(function() {
        var form = $('#form-edit-satuan');
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
                            url: "{{route('master.satuan.edit')}}",
                            data: {
                                _token      : "{{csrf_token()}}" ,
                                edit_id     : $('#satuan-edit-form-edit-id').val(),
                                id          : $('#satuan-edit-form-id').val(),
                                name        : $('#satuan-edit-form-name').val(),
                                desc        : $('#satuan-edit-form-desc').val()
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
                                    let modal_edit_satuan = bootstrap.Modal.getInstance(document.getElementById('satuan-edit-modal'))
                                    modal_edit_satuan.hide();
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

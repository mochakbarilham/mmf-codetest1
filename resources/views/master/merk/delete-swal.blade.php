<script>
    $('#master-merk-table tbody').on('click', '#delete-modal', function(){
        let data = master_merk_datatable.row( $(this).parents('tr') ).data();
        Swal.fire({
            html: `Anda yakin ingin menghapus data <b>${data.name}</b> ?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#808080',
            confirmButtonText: 'Hapus',
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
                    url: "{{route('master.merk.delete')}}",
                    data: {
                        _token      : "{{csrf_token()}}" ,
                        delete_id   : data.id,
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
                            master_merk_datatable.ajax.reload();
                        }
                    }
                });
            }
        })
    });
</script>

@extends('include.template')
@section('title', 'Master Merk')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body table-responsive">
                <div class="card-title">Tabel Master Merk</div>
                <div>
                    <div class="col-md-12 d-flex justify-content-end mb-4">
                        <button class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#merk-add-modal">
                            <i class="bi bi-plus"></i>  Tambah Merk
                        </button>
                    </div>
                    <div class="col-md-12 mt-2">
                        <table class="table" id="master-merk-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Merk</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal Pembuatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('master.merk.add-modal')
@include('master.merk.edit-modal')
@endsection

@section('js')
<script>
    let master_merk_datatable = $("#master-merk-table").DataTable({
        processing: true,
        serverSide: true,
        scrollX: false,
        responsive: true,
        autoWidth: false,
        ajax: "{{route('master.merk.get-table')}}",
        deferRender: true,
        dom: '<"datatable-header"fl><"datatable-scroll"t>r<"datatable-footer"ip>',
        oLanguage: {
            sProcessing: "<div id='loader'></div>",
            sEmptyTable: "Tidak ada Data",
            sInfoEmpty: "Tidak ada entri data yang didapat",
            sZeroRecords: "Tidak menemukan hasil yang sesuai",
            sInfo: "Menampilkan entri ke-_START_ s/d _END_ dari total _TOTAL_ entri",
            sSearch: "Cari:      ",
            oPaginate: {
                "sPrevious": "Sebelumnya",
                "sNext": "Berikutnya"
            }
        },
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'desc', name: 'desc'},
            {data: 'created_at', name: 'created_at'},
            {data: 'aksi', name: 'aksi'},
        ]
    });
</script>

@include('master.merk.add-modal-js')
@include('master.merk.edit-modal-js')
@include('master.merk.delete-swal')
@endsection

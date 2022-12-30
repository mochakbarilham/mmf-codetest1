@extends('include.template')
@section('title', 'Master Barang')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body table-responsive">
                <div class="card-title">Tabel Master Barang</div>
                <div>
                    <div class="col-md-12 d-flex justify-content-end mb-4">
                        <button class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#barang-add-modal">
                            <i class="bi bi-plus"></i>  Tambah Barang
                        </button>
                    </div>
                    <div class="col-md-12 mt-2">
                        <table class="table" id="master-barang-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Barang</th>
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
@include('master.barang.add-modal')
@include('master.barang.edit-modal')
@endsection

@section('js')
<script>
    let master_barang_datatable = $("#master-barang-table").DataTable({
        processing: true,
        serverSide: true,
        scrollX: false,
        responsive: true,
        autoWidth: false,
        ajax: "{{route('master.barang.get-table')}}",
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

@include('master.barang.add-modal-js')
@include('master.barang.edit-modal-js')
@include('master.barang.delete-swal')
@endsection

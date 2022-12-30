@extends('include.template')
@section('title', 'Single Invoice')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body table-responsive">
                <div class="card-title">Tabel Invoice</div>
                <div>
                    <div class="col-md-12 d-flex justify-content-end mb-4">
                        <button class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#single-invoice-add-modal">
                            <i class="bi bi-plus"></i>  Tambah Invoice
                        </button>
                    </div>
                    <div class="col-md-12 mt-2">
                        <table class="table" id="single-invoice-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Barang</th>
                                    <th>Jumlah</th>
                                    <th>Batch Number</th>
                                    <th>Delivery Time</th>
                                    <th>Tanggal Transaksi</th>
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
@include('single_invoice.add-modal')
@include('single_invoice.edit-modal')
@endsection

@section('js')
<script>
    let single_invoice_datatable = $("#single-invoice-table").DataTable({
        processing: true,
        serverSide: true,
        scrollX: false,
        responsive: true,
        autoWidth: false,
        ajax: "{{route('single-invoice.get-table')}}",
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
            {data: 'barang', name: 'barang'},
            {data: 'jumlah_barang', name: 'jumlah_barang'},
            {data: 'batch_number', name: 'batch_number'},
            {data: 'delivery_time', name: 'delivery_time'},
            {data: 'created_at', name: 'created_at'},
            {data: 'aksi', name: 'aksi'},
        ]
    });
</script>
@include('single_invoice.select2')
@include('single_invoice.add-modal-js')
@include('single_invoice.edit-modal-js')
@include('single_invoice.delete-swal')
@endsection

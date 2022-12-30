<script>
    $('#invoice-add-form-barang').select2({
        theme: "bootstrap-5",
        placeholder: '-- Pilih Barang ---',
        ajax: {
            url: "{{ route('single-invoice.select2.barang') }}",
            type: "post",
            dataType: 'json',
            delay: 150,
            data: function(params) {
                return {
                    _token: "{{ csrf_token() }}",
                    search: params.term
                };
            },
            processResults: function(response) {
                return {
                    results: response
                };
            },
            cache: true
        }
    });
</script>

<script>
    $('#invoice-add-form-merk').select2({
        theme: "bootstrap-5",
        placeholder: '-- Pilih Merk ---',
        ajax: {
            url: "{{ route('single-invoice.select2.merk') }}",
            type: "post",
            dataType: 'json',
            delay: 150,
            data: function(params) {
                return {
                    _token: "{{ csrf_token() }}",
                    search: params.term
                };
            },
            processResults: function(response) {
                return {
                    results: response
                };
            },
            cache: true
        }
    });
</script>

<script>
    $('#invoice-add-form-satuan').select2({
        theme: "bootstrap-5",
        placeholder: '-- Pilih Barang ---',
        ajax: {
            url: "{{ route('single-invoice.select2.satuan') }}",
            type: "post",
            dataType: 'json',
            delay: 150,
            data: function(params) {
                return {
                    _token: "{{ csrf_token() }}",
                    search: params.term
                };
            },
            processResults: function(response) {
                return {
                    results: response
                };
            },
            cache: true
        }
    });
</script>

<script>
    $('#invoice-edit-form-barang').select2({
        theme: "bootstrap-5",
        placeholder: '-- Pilih Barang ---',
        ajax: {
            url: "{{ route('single-invoice.select2.barang') }}",
            type: "post",
            dataType: 'json',
            delay: 150,
            data: function(params) {
                return {
                    _token: "{{ csrf_token() }}",
                    search: params.term
                };
            },
            processResults: function(response) {
                return {
                    results: response
                };
            },
            cache: true
        }
    });
</script>

<script>
    $('#invoice-edit-form-merk').select2({
        theme: "bootstrap-5",
        placeholder: '-- Pilih Merk ---',
        ajax: {
            url: "{{ route('single-invoice.select2.merk') }}",
            type: "post",
            dataType: 'json',
            delay: 150,
            data: function(params) {
                return {
                    _token: "{{ csrf_token() }}",
                    search: params.term
                };
            },
            processResults: function(response) {
                return {
                    results: response
                };
            },
            cache: true
        }
    });
</script>

<script>
    $('#invoice-edit-form-satuan').select2({
        theme: "bootstrap-5",
        placeholder: '-- Pilih Barang ---',
        ajax: {
            url: "{{ route('single-invoice.select2.satuan') }}",
            type: "post",
            dataType: 'json',
            delay: 150,
            data: function(params) {
                return {
                    _token: "{{ csrf_token() }}",
                    search: params.term
                };
            },
            processResults: function(response) {
                return {
                    results: response
                };
            },
            cache: true
        }
    });
</script>

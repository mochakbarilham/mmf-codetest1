<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Merpati Manufacture Facility Code Test 1</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('template/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{url('template/assets/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{url('template/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{url('template/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{url('template/assets/css/app.css')}}">
    <link rel="stylesheet" href="{{url('template/assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css')}}">
    <link rel="shortcut icon" href="{{url('template/assets/images/favicon.svg')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="text-center mt-3">
                    <a href="index.html"><img src="{{url('template/assets/images/logo/logo.png')}}" alt="Logo"
                            srcset=""></a>
                </div>
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                @include('include.sidebar')
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>@yield('title')</h3>
            </div>
            <div class="page-content">
                @yield('content')
            </div>

            <footer>
                <div class="footer clearfix mt-4 mb-0 text-muted">
                    <div class="float-start">
                        <p>{{Carbon\Carbon::now()->year}} &copy;</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{url('template/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{url('template/assets/js/bootstrap.bundle.min.js')}}"></script>

    {{-- <script src="{{url('template/assets/vendors/apexcharts/apexcharts.js')}}"></script> --}}
    {{-- <script src="{{url('template/assets/js/pages/dashboard.js')}}"></script> --}}
    <script src="{{url('template/assets/js/mazer.js')}}"></script>
    <script src="{{url('template/assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{url('template/assets/vendors/jquery-datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('template/assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- <script>
        // $("select").select2({
        //     theme: "bootstrap-5",
        // });
    </script> --}}
    @yield('js')
</body>

</html>

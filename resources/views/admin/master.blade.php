<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ATR/BPN</title>
    
    <link rel="stylesheet" href="{{asset('mazer')}}/assets/css/main/app.css">
    <link rel="stylesheet" href="{{asset('mazer')}}/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="{{asset('img')}}/Logo_BPN-KemenATR.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('img')}}/Logo_BPN-KemenATR.png" type="image/png">
    
    <link rel="stylesheet" href="{{asset('mazer')}}/assets/css/pages/fontawesome.css">
    <link rel="stylesheet" href="{{asset('mazer')}}/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{asset('mazer')}}/assets/css/pages/datatables.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            @include('admin._sidebar')
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
            @yield('content')

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Kantor Pertanahan Kabupaten Banjar</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="">Aulia Rakhman</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('mazer')}}/assets/js/bootstrap.js"></script>
    <script src="{{asset('mazer')}}/assets/js/app.js"></script>
    
<!-- Need: Apexcharts -->
<script src="{{asset('mazer')}}/assets/extensions/jquery/jquery.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
{{-- <script src="{{asset('mazer')}}/assets/js/pages/datatables.js"></script> --}}

@yield('script')

</body>

</html>

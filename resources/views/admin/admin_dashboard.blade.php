<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('mecom-backend/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('mecom-backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('mecom-backend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('mecom-backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('mecom-backend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('mecom-backend/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('mecom-backend/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('mecom-backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('mecom-backend/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('mecom-backend/assets/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('mecom-backend/assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('mecom-backend/assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('mecom-backend/assets/css/header-colors.css') }}" />
    <title>Rukada - Responsive Bootstrap 5 Admin Template</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        @include('admin.body.sidebar')
        <!--end sidebar wrapper -->
        <!--start header -->
        @include('admin.body.header')
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            @yield('admin')
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        @include('admin.body.footer')
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    @include('admin.body.switcher')
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('mecom-backend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('mecom-backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('mecom-backend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('mecom-backend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('mecom-backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('mecom-backend/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('mecom-backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('mecom-backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('mecom-backend/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('mecom-backend/assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('mecom-backend/assets/plugins/jquery-knob/excanvas.js') }}"></script>
    <script src="{{ asset('mecom-backend/assets/plugins/jquery-knob/jquery.knob.js') }}"></script>
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
    <script src="{{ asset('mecom-backend/assets/js/index.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('mecom-backend/assets/js/app.js') }}"></script>


    <!-- change image -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#edit-image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#show-image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>


    <!-- toaster -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>
</body>

</html>

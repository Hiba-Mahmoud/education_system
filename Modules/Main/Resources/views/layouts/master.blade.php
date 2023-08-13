<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{--  <title>Module Main</title>  --}}
        @include('main::layouts.head')
       {{-- Laravel Vite - CSS File --}}
       {{-- {{ module_vite('build-main', 'Resources/assets/sass/app.scss') }} --}}

    </head>
    {{--  <body>

        Laravel Vite - JS File
        {{ module_vite('build-main', 'Resources/assets/js/app.js') }}
    </body>  --}}
    <body id="page-top">
    <div id="wrapper">
       @include('main::layouts.sidebar')
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
       @include('main::layouts.nav')

                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Dashboard</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
                    </div>
        @yield('content')

                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2023</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard | @yield('title')</title>

    <link href="{{ asset('pages/backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="{{ asset('pages/backend/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        @include('includes.admin.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                @include('includes.admin.navbar')

                <div class="container-fluid">

                    @yield('content')

                </div>

            </div>

            @include('includes.admin.footer')

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('includes.admin.script')

</body>

</html>
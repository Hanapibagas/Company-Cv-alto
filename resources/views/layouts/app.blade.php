<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CV. Alto Perkasa | @yield('title')</title>
    <link rel="shortcut icon" href="favicon.ico">

    @include('includes.pages.style')

</head>

<body>

    @include('includes.pages.navbar')

    <main id="content" role="main">

        @yield('content')

    </main>

    @include('includes.pages.footer')

    @include('includes.pages.script')
</body>

</html>
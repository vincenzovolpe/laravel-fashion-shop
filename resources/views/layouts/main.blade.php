<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Boolean.Careers</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>
    <body>
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')
        <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    </body>
</html>

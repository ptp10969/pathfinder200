<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-
scale=1.0">

<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}}</title>
    @yield('style')
</head>
    <body>
    @include('layouts._navbar')
        </nav>
        <div class="container">
        @yield('content')
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('script')
    </body>
</html>
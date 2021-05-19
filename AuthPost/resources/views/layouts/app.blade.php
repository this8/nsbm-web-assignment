<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Larablog') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="container">
        {{-- @include('include.navbar'); ------------------------------------------------------------------------}}

        <main class="py-4" class="container">
            {{-- @include('include.message') ----------------------------------------------------------------}}
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
   
    <script>
        CKEDITOR.replace( 'body' );
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title>Lam Vien FNB</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="{{ env('CDN_URL') }}/css/animate.css">
    @vite(['resources/css/app.css'])
    @stack('styles')
    @routes

    @if (isset($page) || request()->inertia())
        @vite(['resources/css/app.css'])
        @vite(['resources/js/app.ts'])
        @inertiaHead
    @else
    @endif
</head>

<body class="main-layout">

    @include('layouts.header')

    @if (isset($page) || request()->inertia())
        @inertia
    @else
        @yield('content')
        @stack('scripts')
    @endif

    @include('layouts.footer')
</body>

</html>

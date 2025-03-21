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

    @routes

    @if (request()->is('admin*') || isset($page) || request()->inertia())
        @vite(['resources/css/admin.css'])
        @vite(['resources/js/app.ts'])
        @inertiaHead
    @else
        <link rel="stylesheet" href="{{ env('CDN_URL') }}/css/animate.css">
        @vite(['resources/css/app.css'])
        @stack('styles')
    @endif
</head>

<body @class([
    '' => request()->is('admin*'),
    'main-layout' => !request()->is('admin*')
])>

    @if (isset($page) || request()->inertia())
        @inertia
    @else
        @include('layouts.header')

        @yield('content')
        @stack('scripts')

        @include('layouts.footer')
    @endif

</body>

</html>

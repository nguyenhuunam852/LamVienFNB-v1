<!DOCTYPE html>
<html>

<head>
    <title>Editable Page</title>

    @vite(['resources/js/grapes.js'])

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="main-layout">
    @include('layouts.header')

    <style>{!! $cssFromGrapesJs !!}</style>
    {!! $htmlFromGrapesJs !!}

    @include('layouts.footer')
</body>

</html>

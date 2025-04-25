<!DOCTYPE html>
<html>

<head>
    <title>Editable Page</title>

    @vite(['resources/js/grapes.js'])

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="main-layout">
    @include('layouts.header')

    {!! $htmlGrapesJs !!}

    @include('layouts.footer')
</body>

</html>

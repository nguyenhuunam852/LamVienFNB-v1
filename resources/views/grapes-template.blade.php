<!DOCTYPE html>
<html>

<head>
    <title>Editable Page</title>

    @vite(['resources/js/grapes.js'])

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="main-layout">
    {{-- @include('layouts.header') --}}

    <main>
        <div id="grapes-app" class="h-full">
            <grapes-editor :content-html='{!! json_encode($contentHtml) !!}'></grapes-editor>
        </div>
    </main>

    {{-- @include('layouts.footer') --}}
</body>

</html>

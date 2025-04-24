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
            <grapes-editor :item-id='{{ $productId }}' :content-html='@json($contentHtml)'></grapes-editor>
        </div>
    </main>

    {{-- @include('layouts.footer') --}}
</body>

</html>

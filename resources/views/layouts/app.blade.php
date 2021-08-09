<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Primary Meta Tags -->
    <meta name="title" content="@yield('title')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', 'Blog Rido Ananda')">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://blog.ridoananda.my.id">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description', 'Blog Rido Ananda')">
    <meta property="og:image" content="@yield('image', '/img/logo.png')">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="@yield('category', 'My Blog')">
    <meta property="twitter:url" content="https://blog.ridoananda.my.id">
    <meta property="twitter:title" content="@yield('title')">
    <meta property="twitter:description" content="@yield('description', 'Blog Rido Ananda')">
    <meta property="twitter:image" content="@yield('image', '/img/logo.png')">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link href="{{ asset('markdown-editor/css/editormd.preview.min.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        .editormd-html-preview, .editormd-preview-container {
          padding: 0 !important;
        }
        .markdown-body {
          font-family: "Montserrat", Sans-Serif;
          font-size: 1em;
        }
    </style>
    <title>@yield('title')</title>
</head>

<body>
    @include('layouts.navigasi')
    @yield('content')
    @include('layouts.footer')

    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('markdown-editor/lib/marked.min.js') }}"></script>
    <script src="{{ asset('markdown-editor/lib/prettify.min.js') }}"></script>
    <script src="{{ asset('markdown-editor/lib/raphael.min.js') }}"></script>
    <script src="{{ asset('markdown-editor/lib/underscore.min.js') }}"></script>
    <script src="{{ asset('markdown-editor/lib/sequence-diagram.min.js') }}"></script>
    <script src="{{ asset('markdown-editor/lib/flowchart.min.js') }}"></script>
    <script src="{{ asset('markdown-editor/lib/jquery.flowchart.min.js') }}"></script>
    <script src="{{ asset('markdown-editor/editormd.min.js') }}"></script>
    <script src="/js/main.js"></script>
    <script type='text/javascript' src='//pl16490485.highperformancecpm.com/ef/94/5c/ef945cf83af5af78b99265d12eeba355.js'></script>
    
</body>

</html>
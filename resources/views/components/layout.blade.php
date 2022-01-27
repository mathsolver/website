<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <!-- Scripts -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

    <!-- Title -->
    <title>{{ $title }}</title>
</head>
<body>
    <nav class="py-16 px-20 w-full absolute flex items-center justify-between">
        <a href="{{ route('home') }}" class="text-lg font-semibold text-gray-900">
            Math Solver<span class="text-indigo-500">.</span>
        </a>

        <ul>
            <li><a class="text-gray-800" href="{{ route('home') }}">Home</a></li>
        </ul>
    </nav>

    {{ $slot }}
</body>
</html>

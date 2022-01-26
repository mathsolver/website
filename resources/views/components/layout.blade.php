<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Title -->
    <title>{{ $title }}</title>
</head>
<body>
    {{ $slot }}
</body>
</html>

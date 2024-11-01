<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100">
    @include('partials.header')
    @include('partials.nav')

    <main class="container mx-auto mt-4">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>

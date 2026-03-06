<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <nav class="flex items-center justify-between bg-gray-800 text-white px-6 py-3">
        <div class="font-bold text-lg">Website</div>

        <div class="space-x-4">
            <a href="/" class="hover:text-gray-300">Home</a>
            <a href="/about" class="hover:text-gray-300">About</a>
            <a href="/pegawai" class="hover:text-gray-300">Pegawai</a>
        </div>
    </nav>

    <div class="p-6">
        @yield('content')
    </div>

</body>
</html>
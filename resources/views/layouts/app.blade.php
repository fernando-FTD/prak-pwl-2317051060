<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manajemen User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    <x-navbar />

    <main class="container mx-auto px-4 my-8 flex-grow">
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
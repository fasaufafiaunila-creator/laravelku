<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Backoffice Kantin' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-gray-100 antialiased min-h-screen flex flex-col">
    <!-- Header Admin -->
    <header class="bg-gray-800 border-b border-gray-700 p-4 flex justify-between items-center">
        <h1 class="font-bold text-lg text-amber-400">🛡️ Super Admin Kantin</h1>
        <span class="text-xs bg-amber-500/20 text-amber-300 border border-amber-500/30 px-2 py-1 rounded">Central Office</span>
    </header>

    <main class="flex-1 p-6 max-w-7xl mx-auto w-full">
        {{ $slot }}
    </main>
</body>
</html>
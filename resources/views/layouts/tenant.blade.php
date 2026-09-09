<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Panel Pengelola Tenant' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800 antialiased min-h-screen flex flex-col">
    <!-- Header Tenant -->
    <header class="bg-emerald-700 text-white p-4 shadow flex justify-between items-center">
        <h1 class="font-bold text-lg">🏪 Dashboard Tenant / Outlets</h1>
        <span class="text-xs bg-emerald-900 px-2 py-1 rounded">Operator Mode</span>
    </header>

    <!-- Container Utama -->
    <div class="flex flex-1">
        <main class="flex-1 p-6 max-w-7xl mx-auto w-full">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
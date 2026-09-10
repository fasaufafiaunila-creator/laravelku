<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard Admin' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 antialiased min-h-screen flex flex-col">
    <header class="bg-indigo-900 text-white shadow">
        <div class="max-w-7xl mx-auto px-4 h-16 flex justify-between items-center">
            <h1 class="text-lg font-bold">Admin Kantin Pusat</h1>
            <div class="text-sm">Administrator</div>
        </div>
    </header>

    <main class="flex-1 max-w-7xl w-full mx-auto px-4 py-6">
        <!-- Wrapper Responsif untuk Konten/Tabel -->
        <div class="bg-white rounded-lg shadow p-4 md:p-6 overflow-x-auto">
            {{ $slot }}
        </div>
    </main>
</body>
</html>
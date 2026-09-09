<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Kantin Multi-Tenant - Pelanggan' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 antialiased min-h-screen flex flex-col">
    <!-- Navbar Pelanggan (Mobile Responsive) -->
    <header class="bg-indigo-600 text-white shadow-md p-4 flex justify-between items-center">
        <h1 class="font-bold text-lg">🍽️ Kantin Mobile</h1>
        <span class="text-xs bg-indigo-800 px-2 py-1 rounded-full">Pelanggan</span>
    </header>

    <!-- Konten Utama -->
    <main class="flex-grow p-4 max-w-md mx-auto w-full">
        {{ $slot }}
    </main>

    <!-- Footer / Bottom Bar -->
    <footer class="bg-white border-t border-gray-200 p-3 text-center text-xs text-gray-500">
        &copy; {{ date('Y') }} Kantin Multi-Tenant System
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Kantin Multi-Tenant' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 antialiased min-h-screen flex flex-col">
    <!-- Header Publik Mobile-First (Target sentuh min 44px) -->
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-md md:max-w-4xl mx-auto px-4 h-14 flex items-center justify-between">
            <h1 class="text-lg font-bold text-emerald-600">Kantin Digital</h1>
            <div class="flex items-center gap-2">
                <a href="#" class="min-h-[44px] min-w-[44px] flex items-center justify-center text-sm font-medium text-gray-600 hover:text-emerald-600">
                    Keranjang
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content Container (Dioptimalkan untuk tampilan 375px hingga 1024px) -->
    <main class="flex-1 max-w-md md:max-w-4xl w-full mx-auto px-4 py-6">
        {{ $slot }}
    </main>

    <!-- Sticky Navigation / Footer Mobile -->
    <footer class="bg-white border-t border-gray-200 py-3 text-center text-xs text-gray-500">
        <p>&copy; {{ date('Y') }} Kantin Multi-Tenant. All rights reserved.</p>
    </footer>
</body>
</html>
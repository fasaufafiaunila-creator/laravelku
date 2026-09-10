<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard Tenant' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-slate-100 text-slate-800 antialiased min-h-screen flex" x-data="{ sidebarOpen: true }">
    <!-- Sidebar Collapsible -->
    <aside 
        :class="sidebarOpen ? 'w-64' : 'w-20'" 
        class="bg-slate-900 text-white p-4 transition-all duration-300 flex flex-col hidden md:flex min-h-screen">
        
        <div class="flex items-center justify-between mb-6">
            <span x-show="sidebarOpen" class="font-bold text-emerald-400 text-lg truncate">Operator Tenant</span>
            <button @click="sidebarOpen = !sidebarOpen" class="min-h-[44px] min-w-[44px] p-2 hover:bg-slate-800 rounded flex items-center justify-center">
                &#9776;
            </button>
        </div>

        <nav class="space-y-2 flex-1">
            <a href="#" class="flex items-center gap-3 px-3 py-3 rounded min-h-[44px] hover:bg-slate-800 transition">
                <span class="text-xl">&#128200;</span>
                <span x-show="sidebarOpen" class="truncate">Dashboard</span>
            </a>
            <a href="#" class="flex items-center gap-3 px-3 py-3 rounded min-h-[44px] hover:bg-slate-800 transition">
                <span class="text-xl">&#128221;</span>
                <span x-show="sidebarOpen" class="truncate">Pesanan (KDS)</span>
            </a>
            <a href="#" class="flex items-center gap-3 px-3 py-3 rounded min-h-[44px] hover:bg-slate-800 transition">
                <span class="text-xl">&#127828;</span>
                <span x-show="sidebarOpen" class="truncate">Kelola Menu</span>
            </a>
        </nav>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col min-w-0">
        <header class="bg-white border-b border-gray-200 h-16 px-6 flex items-center justify-between md:justify-end">
            <button @click="sidebarOpen = !sidebarOpen" class="md:hidden min-h-[44px] min-w-[44px] p-2">
                &#9776;
            </button>
            <div class="text-sm font-medium text-gray-700">Operator Stand</div>
        </header>

        <main class="p-4 md:p-6 flex-1 overflow-x-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
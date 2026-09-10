<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Portal Tenant & Pengelola</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4 antialiased">

    <!-- Card Login Container -->
    <div class="max-w-4xl w-full bg-white rounded-2xl shadow-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2">
        
        <!-- Sisi Kiri: Banner Merah -->
        <div class="bg-red-600 text-white p-8 md:p-12 flex flex-col justify-between relative min-h-[320px]">
            <div>
                <div class="flex items-center gap-2 font-bold text-sm tracking-wider uppercase mb-8">
                    <span class="w-3 h-3 bg-white inline-block"></span>
                    KANTIN TEKNIK
                </div>
                
                <h1 class="text-3xl md:text-4xl font-black leading-tight mb-4">
                    Satu kantin.<br>
                    Banyak dapur.<br>
                    Satu sistem.
                </h1>
                
                <p class="text-red-100 text-sm">
                    Portal tenant & pengelola — Universitas Nusantara
                </p>
            </div>

            <div class="text-xs tracking-widest text-red-200 uppercase mt-8">
                MULTI-TENANT &bull; QRIS &bull; REAL-TIME
            </div>
        </div>

        <!-- Sisi Kanan: Form Login -->
        <div class="p-8 md:p-12 flex flex-col justify-center bg-gray-50">
            <h2 class="text-2xl font-bold text-gray-900">Masuk</h2>
            <p class="text-xs text-gray-500 mt-1 mb-6">Gunakan akun tenant atau pengelola Anda.</p>

            <form action="#" method="POST" class="space-y-4">
                @csrf
                
                <!-- Input Surel -->
                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Surel</label>
                    <input type="email" placeholder="nama@domain.com" required class="min-h-[44px] px-3 py-2 border border-gray-400 focus:border-red-600 focus:ring-red-600 rounded-md shadow-sm w-full text-sm bg-white" />
                </div>

                <!-- Input Kata Sandi -->
                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Kata sandi</label>
                    <div class="relative">
                        <input type="password" placeholder="••••••••" required class="min-h-[44px] px-3 py-2 border border-gray-400 focus:border-red-600 focus:ring-red-600 rounded-md shadow-sm w-full text-sm bg-white pr-20" />
                        <button type="button" class="absolute right-3 top-1/2 -translate-y-1/2 text-xs font-semibold text-gray-500 hover:text-gray-800">
                            Tampilkan
                        </button>
                    </div>
                </div>

                <p class="text-[10px] text-gray-400 leading-tight">
                    5x gagal dalam 10 menit &rarr; akun terkunci 15 menit. Sesi berakhir setelah 8 jam tidak aktif.
                </p>

                <!-- Tombol Masuk -->
                <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 rounded-lg text-sm transition duration-150 mt-2 flex items-center justify-center gap-2">
                    Masuk &rarr;
                </button>

                <div class="text-left mt-3">
                    <a href="#" class="text-xs font-semibold text-red-600 hover:underline">
                        Lupa kata sandi?
                    </a>
                </div>
            </form>
        </div>

    </div>

</body>
</html>
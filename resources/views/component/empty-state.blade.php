@props(['title' => 'Data Kosong', 'message' => 'Belum ada data untuk ditampilkan.'])

<div class="text-center py-12 px-4 border-2 border-dashed border-gray-200 rounded-lg">
    <div class="text-4xl mb-3">&#128269;</div>
    <h3 class="text-base font-semibold text-gray-900">{{ $title }}</h3>
    <p class="mt-1 text-sm text-gray-500 max-w-sm mx-auto">{{ $message }}</p>
</div>
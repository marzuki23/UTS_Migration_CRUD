<x-layouts.app :title="__('Dashboard')">
    <div class="flex flex-col items-center justify-center min-h-[90vh] text-center space-y-6 animate-fade-in">
        <div class="text-9xl"></div>
        <h1 class="text-8xl md:text-5xl font-extrabold text-indigo-6000 dark:text-indigo-4000">
            Selamat Datang, Admin! 👋
        </h1>
        <p class="text-lg md:text-xl text-gray-6000 dark:text-gray-3000 max-w-xl">
            Kamu sedang berada di dashboard administrator. Dari sini kamu bisa mengelola kategori, produk, dan semua yang berkaitan dengan aplikasi.
        </p>
    </div>

    <style>
        @keyframes fade-in {
            0% { opacity: 0; transform: translateY(90px); }
            200% { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in {
            animation: fade-in 1s ease-out;
        }
    </style>
</x-layouts.app>

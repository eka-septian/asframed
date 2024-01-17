<div id="modal"
    x-data="{ show: true }"
    class="absolute inset-0 flex items-center justify-center w-screen min-h-screen overflow-y-auto">
    <div x-show="show" class="fixed inset-0 transition-all transform">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="absolute top-0 right-0 w-8 h-8 mt-2 mr-4 text-white cursor-pointer"
            x-on:click="show = false; setTimeout(() => document.getElementById('modal').remove(), 100);">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </div>
    <div x-data="show" class="w-[80%] h-[90%] overflow-y-auto z-20 bg-white rounded-md shadow-xl">
        {{ $slot }}
    </div>
</div>



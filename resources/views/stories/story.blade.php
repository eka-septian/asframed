<div id="modal"
    x-data="{ show: true }"
    x-show="show"
    class="fixed inset-0 flex items-center justify-center w-screen h-screen">
    <div class="fixed inset-0 bg-gray-500 opacity-75"></div>

    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="absolute top-0 right-0 w-8 h-8 mr-4 mt-2 cursor-pointer text-white"
        x-on:click="show = false; setTimeout(() => document.getElementById('modal').remove(), 100);">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
    </svg>
    <div
        class="grid grid-cols-2 w-[80%] h-[90%] bg-white rounded-md overflow-y-auto shadow-xl transform transition-all ">
        <div class="flex items-center w-auto max-h-full bg-gray-100 rounded-r-md">
            <img src="{{ asset('storage/' . $story->image) }}"
                alt="Photo by {{ $story->user->name }}"
                class="max-h-full">
        </div>
        <div>
            <h1>{{ $story->title }}</h1>
            <p>{{ $story->description }}</p>
        </div>
    </div>
</div>

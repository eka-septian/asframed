<x-base-modal>
    <div class="grid h-full grid-cols-2 overflow-y-auto">
        <div class="flex items-center w-full rounded-md bg-black">
            <img src="{{ asset('storage/' . $story->image) }}"
                alt="Photo by {{ $story->user->name }}"
                class="max-h-full">
        </div>
        <div class="pt-10 font-semibold text-gray-800 text-center">
            <h1>{{ $story->title }}</h1>
            <br>
            <p>{{ $story->description }}</p>
        </div>
    </div>
</x-base-modal>

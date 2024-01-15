<x-base-modal>
    <div class="grid h-full grid-cols-2 overflow-y-auto">
        <div class="flex items-center w-full rounded-md bg-black">
            <img src="{{ asset('storage/' . $story->image) }}"
                alt="Photo by {{ $story->user->name }}"
                class="max-h-full">
        </div>
        <div class="">
            <h1>{{ $story->title }}</h1>
            <p>{{ $story->description }}</p>
        </div>
    </div>
</x-base-modal>
